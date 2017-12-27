<?php 

class PostModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
        $this->load->model("FriendsModel");
    }

    
    public function insertPost($newPost)
    {
        $this->db->insert('Post', $newPost);
    }

    public function getAllPosts($userID)
    {
        // $posts = $this->getPosts($userID);

        // $friends = $this->FriendsModel->getFriends($userID);
        // foreach ($friends as $friend) {
        //     $user = $this->UserControl->getUserByID($friend->friendID);
        //     //echo $user->ID . $user->userName;
        //     $posts = array_merge($posts, $this->getPosts($friend->friendID));   
        // }

        // usort($posts, $this->build_sorter('date'));

        // foreach ($posts as $p) {
        //     echo json_encode($p)."<br>";
        // }


        $postList = array();
        
        $posts              = $this->getPosts($userID);
        $user               = $this->UserControl->getUserByID($userID);
        $userInformation    = $this->UserControl->getUserInformation($user->userInformationID);
        $userAvatar         = $this->UserControl->getUserAvatar($userID);

        foreach ($posts as $p) {
            $newPost = array(
                "userID"     => $user->ID,
                "userName"   => $user->userName,
                "name"       => $userInformation->name,
                "userAvatar" => $userAvatar,
                "postID"     => $p["ID"],
                "content"    => $p["content"],
                "date"       => $p["date"]
            );
            array_push($postList, $newPost);
        }

        $friends = $this->FriendsModel->getFriends($userID);
        foreach ($friends as $friend) {
            $user               = $this->UserControl->getUserByID($friend["friendID"]);
            $userAvatar         = $this->UserControl->getUserAvatar($friend["friendID"]);
            $userInformation    = $this->UserControl->getUserInformation($user->userInformationID);
            $posts              = $this->getPosts($friend["friendID"]);
            foreach ($posts as $p) {
                $newPost = array(
                    "userID"     => $user->ID,
                    "userName"   => $user->userName,
                    "name"       => $userInformation->name,
                    "userAvatar" => $userAvatar,
                    "postID"     => $p["ID"],
                    "content"    => $p["content"],
                    "date"       => $p["date"]
                );
                array_push($postList, $newPost);
            }
        }

        usort($postList, $this->build_sorter('date'));
        return $postList;

        // foreach ($postList as $p) {
        //     echo json_encode($p) . "<br>";
        // }

    }

    public function getPosts($userID)
    {
        $posts = $this->db->get_where("Post", array("userID" => $userID));
        return $posts->result_array();
    }

    public function build_sorter($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
    }

    public function getUserPosts($userID)
    {
        $posts = $this->getPosts($userID);
        $postList = array();

        $user = $this->UserControl->getUserByID($userID);
        $userInformation = $this->UserControl->getUserInformation($user->userInformationID);
        $userAvatar = $this->UserControl->getUserAvatar($userID);

        foreach ($posts as $p) {
            $post = array(
                "postid"   => $p["ID"],
                "content"  => $p["content"],
                "date"     => $p["date"],
                "userName" => $userInformation->name,
                "avatar"   => $userAvatar
            );

            array_push($postList, $post);
        }

        usort($postList, $this->build_sorter('date'));
        return $postList;
    }

    public function deletePostByID($postID)
    {
        return $this->db->delete("Post", array("ID" => $postID));
    }
}
