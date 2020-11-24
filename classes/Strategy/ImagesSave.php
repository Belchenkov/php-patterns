<?php


namespace Strategy;


class ImagesSave extends BaseSave
{
    public function save(): void
    {
        $file = 'tmp/' . $this->file_path;

        if (file_exists($file)) {
            copy($file, 'images/' . $this->file_path);
        }
    }
}