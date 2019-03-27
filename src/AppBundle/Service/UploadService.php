<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadService
{
	private $targetProfiles;
	private $targetLogos;
	private $targetImages;
	private $activeTargetDir;

	public function __construct($targetProfiles = [], $targetLogos = [], $targetImages = [])
	{
		$this->targetProfiles = $targetProfiles;
		$this->targetLogos = $targetLogos;
		$this->targetImages = $targetImages;
	}

	public function upload(UploadedFile $file)
	{
		$fileName = md5(uniqid()) . '.' . $file->guessExtension();
		$file->move($this->activeTargetDir, $fileName);
		return $fileName;
	}

	public function setActiveTargetDir($target = "profiles")
	{
		if ($target == "profiles") {
			$this->activeTargetDir = $this->targetProfiles;
		} elseif ($target == "logos") {
			$this->activeTargetDir = $this->targetLogos;
		} elseif ($target == "upload_image") {
			$this->activeTargetDir = $this->targetImages;
		}
	}

	public function getActiveTargetDir()
	{
		return $this->activeTargetDir;
	}
}