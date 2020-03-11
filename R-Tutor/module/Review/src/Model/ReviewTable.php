<?php
namespace Review\Model;

use RuntimeException;
use Laminas\Db\TableGateway\TableGatewayInterface;

class ReviewTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getReview($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $id
            ));
        }
        return $row;
    }

    public function saveReview(Review $review,$id)
    {
        $data = [
            'content' => $review->content,
            'course_id'  => $review->course_id,
            'user_id' => $id,
        ];

        $id = (int) $review->id;

        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        try {
            $this->getReview($id);
        } catch (RuntimeException $e) {
            throw new RuntimeException(sprintf(
                'Cannot update Review with identifier %d; does not exist',
                $id
            ));
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }

    public function deleteReview($id)
    {
        $this->tableGateway->delete(['id' => (int) $id]);
    }
}

?>