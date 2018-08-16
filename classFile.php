<?php
interface FileInterface {
	
	public function set();
	public function get();
	public function setSize();
	public function getSize();
	public function setFileName();
	public function getFileName();
	public function setBaseName();
	public function getBaseName();
	public function setDirName();
	public function getDirName();
	public function setExtension();
	public function getExtension();
	public function setError();
	public function getError();
	public function setPath();
	public function getPath();
	public function copy();
	public function setMaxUploadSize();
	public function getMaxUploadSize();
	public function upload();
	public function delete();
	public function status();
	
}
interface ImageInterface extends FileInterface {
	public function setWidth();
	public function getWidth();
	public function setHeight();
	public function getHeight();
	public function setOpacity();
	public function getOpacity(); 
	public function setColor();
	public function getColor();
	public function rotate();
}

class File implements FileInterface {
	public $path;
	public $fileName;
	public $baseName;
	public $dirName;
	public $size;
	public $extension;
	public $error;
	public $maxUploadSize;
	public $status;

	public function __construct($file) {
        
    }

    public function set($file) {
        $this->file = $file;
    }

    public function get() {
    	return $this->file;
    }

    public function setSize() {
    	$this->size = filesize($this->fullPath);
    }

    public function getSize() {
    	return $this->size;
    }

    public function setFileName() {
    	$this->fileName = pathinfo($this->file, PATHINFO_FILENAME);
    }

    public function getFileName() {
    	return $this->fileName;
    }

    public function setBaseName() {
    	$this->baseName = pathinfo($this->file, PATHINFO_BASENAME);
    }

    public function getBaseName() {
    	return $this->baseName;
    }

    public function setDirName() {
    	$this->dirName = dirname($this->file);
    }

    public function getDirName() {
    	$this->dirName = dirname($this->file);

    }

    public function setExtension() {
    	$this->extension = pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function getExtension() {
    	return $this->extension;
    }

    public function setError($error) {
    	$this->error = $error;
    }

    public function getError() {
    	return $this->error;
    } 

    public function setPath($path) {
    	$this->path = $path;
    }

    public  function getPath() {
    	return $this->path;
    }

    public function copy() {
    	copy($_FILES[$this->fileName]['name'], $this->path);
    }

    public function setMaxUploadSize($maxUploadSize) {
    	$this->maxUploadSize = $maxUploadSize;
    }

    public function getMaxUploadSize() {
    	return $this->maxUploadSize;
    }
 
    public function upload() {
    	move_uploaded_file($_FILES[$this->fileName]['name'], $this->path);
    }

    public function delete() {
    	/*

    	*/
    }

    public function status() {
        if (file_exists($this->file)) {
            $this->status = TRUE;
        }

        return $this->status;
    }
}

class Image extends File implements ImageInterface {

}


