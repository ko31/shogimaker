<?php

class Shogi_model extends CI_Model {

    public function __construct()
    {
    }

    // 画像保存
    public function save($input)
    {
        $key = uniqid();

        $image_path = $this->config->item('my_image_path');
        $image_file = $key . ".png";
        
        // 画像生成
        $fp = fopen($image_path . $image_file, 'w');
        $img = str_replace('data:image/png;base64,', '', $input['img']);
        fwrite($fp, base64_decode($img));
        fclose($fp);

        // DB登録
        $sql = "INSERT INTO shogi (`key`, `title`) VALUES (?, ?)";
        if (!$this->db->query($sql, array($key, $input['title']))) {
            return false;
        }

        return $key;
    }

    // キーより画像取得
    public function get($key)
    {
        $sql = "SELECT `id`, `key`, `title`, date_format(`created`, '%Y.%m.%d %T') AS `date` FROM shogi WHERE `key` = ?";
        $result = $this->db->query($sql, array($key));
        if (!$result->num_rows()) {
            return false;
        }

        $image = $result->row_array();
        $image['image'] = '/images/' . $image['key'] . ".png";
        return $image;
    }

    // 最新の画像取得
    public function gets()
    {
        $images = array();

        $sql = "SELECT `id`, `key`, `title`, date_format(`created`, '%Y.%m.%d %T') AS `date` FROM shogi ORDER BY `id` DESC";
        $result = $this->db->query($sql, array());
        if (!$result->num_rows()) {
            return $images;
        }

        $rows = $result->result_array();
        foreach ($rows as $row) {
            $row['image'] = '/images/' . $row['key'] . ".png";
            $images[] = $row;
        }
        return $images;
    }

}
