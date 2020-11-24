<?php


namespace Strategy;


class DocumentsSave extends BaseSave
{
    public function save(): void
    {
        $file = 'tmp/' . $this->file_path;

        if (file_exists($file)) {
            copy($file, 'documents/' . $this->file_path);
        }
    }
}