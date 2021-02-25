<?php

use App\Pengajuan;
use App\Donatur;
use App\Post;


function TotalPost()
{
  return Post::count();
}

function TotalDonatur()
{
  return Donatur::count();
}

function TotalPengajuan()
{
  return Pengajuan::count();
}

 ?>
