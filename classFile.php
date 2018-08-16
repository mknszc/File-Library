<?php

interface FileInterface {
	public function get();
	public function set();
	public function getSize();
	public function setSize();
	public function getName();
	public function setName();
	public function getType();
	public function setType();
	public function setError();
	public function getError();
	public function getTmpName();
	public function setTmpName();
	public function upload();
	public function delete();
	public function status();
	public function copy();
	public function getPath();
	public function setPath();
}

interface ImageInterface extends FileInterface {
	public function getWidth();
	public function setWidth();
	public function getHeight();
	public function setHeight();
	public function getOpacity(); 
	public function setOpacity();
	public function getColor();
	public function setColor();
	public function rotate();
}

class File implements FileInterface {

}

class Image extends File implements ImageInterface {

}
