<?php

//function.php

function base_url()
{
	return 'index.php';
}

function is_admin_login()
{
	if(isset($_SESSION['admin_id']))
	{
		return true;
	}
	return false;
}




function fill_author($connect)
{
	$query = "
	SELECT author_name FROM pwc_db_author 
	WHERE author_status = 'Enable' 
	ORDER BY author_name ASC
	";

	$result = $connect->query($query);

	$output = '<option value="">Select Author</option>';

	foreach($result as $row)
	{
		$output .= '<option value="'.$row["author_name"].'">'.$row["author_name"].'</option>';
	}

	return $output;
}

function fill_category($connect)
{
	$query = "
	SELECT category_name FROM pwc_db_category 
	WHERE category_status = 'Enable' 
	ORDER BY category_name ASC
	";

	$result = $connect->query($query);

	$output = '<option value="">Select Category</option>';

	foreach($result as $row)
	{
		$output .= '<option value="'.$row["category_name"].'">'.$row["category_name"].'</option>';
	}

	return $output;
}

function fill_cupboard($connect)
{
	$query = "
	SELECT cupboard_name FROM pwc_db_cupboard 
	WHERE cupboard_status = 'Enable' 
	ORDER BY cupboard_name ASC
	";

	$result = $connect->query($query);

	$output = '<option value="">Select Cupboard</option>';

	foreach($result as $row)
	{
		$output .= '<option value="'.$row["cupboard_name"].'">'.$row["cupboard_name"].'</option>';
	}

	return $output;
}



function Count_total_news($connect)
{
	$total = 0;

	$query = "SELECT COUNT(id) AS Total FROM pwc_db_news";

	$result = $connect->query($query);

	foreach($result as $row)
	{ 
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_published_news($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(id) AS Total FROM pwc_db_news
	WHERE posted = 'publish'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_draft_news($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(id) AS Total FROM pwc_db_news
	WHERE posted = 'draft'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_events($connect)
{
	$total = 0;

	$query = "SELECT COUNT(id) AS Total FROM pwc_db_events";

	$result = $connect->query($query);

	foreach($result as $row)
	{ 
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_fines_received($connect)
{
	$total = 0;

	$query = "
	SELECT SUM(book_fines) AS Total FROM pwc_db_issue_book 
	WHERE book_issue_status = 'Return'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_book_number($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(book_id) AS Total FROM pwc_db_book 
	WHERE book_status = 'Enable'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_users($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(user_id) AS Total FROM pwc_db_user 
	WHERE user_status = 'Enable'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_author_number($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(author_id) AS Total FROM pwc_db_author 
	WHERE author_status = 'Enable'
	";

	$result  = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_category_number($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(category_id) AS Total FROM pwc_db_category 
	WHERE category_status = 'Enable'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}
	return $total;
}

function Count_total_cupboard_number($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(cupboard_id) AS Total FROM pwc_db_cupboard 
	WHERE cupboard_status = 'Enable'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

?>