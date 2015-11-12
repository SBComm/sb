<?php

function removeBOM($data) {
    if (0 === strpos(bin2hex($book_data), 'efbbbf')) {
       return substr($book_data, 3);
    }
}

function printBooks($path) {
	/* Obtains book data from JSON and creates HTML */

	$book_data_str = file_get_contents($path . "content/second-level/alumni/get-informed/books.json");

	$book_data_str = stripslashes($book_data_str);
	removeBOM($book_data_str);
	$book_data_str = str_replace('&quot;', '"', $book_data_str);
	$book_data_str = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $book_data_str);

	$book_data = json_decode($book_data_str);

	//d($book_data);
	
	$books = $book_data->books;

	//d($books);

	//gather data by category
	foreach ($books as $key => $value) {
		$return[$value->category][] = $value->category;
	}

	//alpha sort
	asort($return);
	//d($return);

	$mainHtml = '';

	//for each category
	foreach ($return as $i => $cat) {
		//set up category wrapper
		$html =  '<div class="authors__book">';
        $html .= '<h5>'.$cat[0].'</h5>';
        $html .= '<div class="alumni-books-slider">';

		//for each book
		foreach ($books as $k => $book) {
			if($book->category == $cat[0]) {
				$html .= '
                    <div class="alumni-book">
                        <div class="authors__book__flip">
                            <div class="authors__book__flip__card">
                                <div class="authors__book__flip__card__item authors__book__flip__card__item--front flip-card">
                                    <img src="img/alumni/book-jackets/'.$book->img.'" alt="" />
                                    <div class="page-curl"><span>Preview</span></div>
                                </div>

                                <div class="authors__book__flip__card__item authors__book__flip__card__item--back authors__book__info">
                                    <a class="authors__book__info__title external-link-hover" target="_blank" href="'.$book->link.'">'.$book->title.'</a>
                                    <span class="authors__book__info__author">'.$book->author.' \''.$book->year.'</span>
                                    <span class="authors__book__info__desc">'.$book->description.'</span>
                                    <a class="authors__book__cta sbu-outline-button sbu-outline-button--on-red arrow-after" href="'.$book->link.'" target="_blank">View on Amazon</a>
                                    <img src="img/alumni/book-jackets/'.$book->img.'" alt="" />
                                    <button aria-label="Close Detail pane" class="authors__book__info__close close-details flip-card"><em class="fa fa-times"></em></button>
                                </div>
                            </div>
                        </div>
                    </div>
        		';
			}
		}

        $html .= '</div>';
        $html .= '</div>';

        $mainHtml .= $html;

	}

	echo $mainHtml;

}

printBooks($path);

?>