<?php
    class PostModel extends Database
    {
        public function getAllPosts($user_id)
        {
            return $this->fetchAllRecords("
                SELECT * FROM posts
                WHERE user_id = '$user_id'
            ");
        }

        public function createPost($user_id, $title, $content)
        {
            return $this->execute("
                INSERT INTO posts(user_id, title, content)
                VALUES ($user_id, '$title', '$content')
            ");
        }

        public function getPostById($post_id)
        {
            return $this->fetchARecord("
                SELECT * FROM posts WHERE id = $post_id
            ");
        }

        public function editPost($post_id, $title, $content)
        {
            return $this->execute("
                UPDATE posts
                SET title = '$title', content = '$content'
                WHERE id = $post_id
            ");
        }

        public function deletePost($post_id)
        {
            return $this->execute("
                DELETE FROM posts WHERE id = $post_id
            ");
        }
    }
