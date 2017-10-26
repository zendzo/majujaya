<?php

function status($value)
{
	if ($value == "1") {
		return "Aktif";
	}else{
		return "Inaktif";
	}
}

function statusClass($value)
{
	if ($value == "1") {
		return "success";
	}else{
		return "danger";
	}
}