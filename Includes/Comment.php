<?php

/**
 * Description of UserComment
 */
class Comment implements \JsonSerializable
{
    private $username, $comment, $commentid, $canDelete;
    
    public function __construct($username, $comment, $commentid, $canDelete)
    {
        $this->username = $username;
        $this->comment = $comment;
        $this->commentid = $commentid;
        $this->canDelete = $canDelete;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getCommentid()
    {
        return $this->commentid;
    }
    
    public function getCanDelete()
    {
        return $this->canDelete;
    }

    public function jsonSerialize()
    {
        $json_obj = new \stdClass;
        $json_obj->username = $this->username;
        $json_obj->comment = $this->comment;
        $json_obj->commentid = $this->commentid;
        $json_obj->canDelete = $this->canDelete;
        return $json_obj;
    }
}