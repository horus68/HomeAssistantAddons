<?php

if (!isset($config)) {
    $config = [];
}

/*
 ***************************************************
 * Please read config_default.php for all possible
 * configuration items
 * For changes in config_default.php see CHANGELOG.md
 ***************************************************
 */

/*
 * The directory containing calibre's metadata.db file, with sub-directories
 * containing all the formats.
 * BEWARE : it has to end with a /
 */
$config['calibre_directory'] = '/media/books/';

/*
 * use URL rewriting for downloading of ebook in HTML catalog
 * See README for more information
 *  1 : enable
 *  0 : disable
 */
$config['cops_use_url_rewriting'] = "0";

/*
 * Specify the ignored formats that will never display in COPS
 */
$config['cops_ignored_formats'] = ['ORIGINAL_EPUB', 'ORIGINAL_AZW3'];

/*
 * Show links to sort by title, author, pubdate, rating or timestamp in OPDS catalog (using facets)
 * Note: this will only work if your e-reader supports facets in OPDS feeds, like Thorium Reader for example
 * See https://specs.opds.io/opds-1.2.html#4-facets for specification details
 * To disable this feature, use an empty array in config_local.php:
 * $config['cops_opds_sort_links'] = [];
 *
 * Available values: ['title', 'author', 'pubdate', 'rating', 'timestamp']
 */
$config['cops_opds_sort_links'] = ['title', 'author', 'pubdate', 'rating', 'timestamp'];

/*
 * Show links to filter by Author, Language, Publisher, Rating, Serie or Tag in OPDS catalog (using facets)
 * Note: this will only work if your e-reader supports facets in OPDS feeds, like Thorium Reader for example
 * See https://specs.opds.io/opds-1.2.html#4-facets for specification details
 * To disable this feature, use an empty array in config_local.php:
 * $config['cops_opds_filter_links'] = [];
 *
 * Available values: ['author', 'language', 'publisher', 'rating', 'series', 'tag']
 */
$config['cops_opds_filter_links'] = ['author', 'language', 'rating', 'tag'];

/*
 * Specify the formats preferred to make available for download
 */
$config['cops_prefered_format'] = array('EPUB', 'MOBI', 'PDF', 'AZW3', 'AZW', 'CBR', 'CBZ');

/*
 * Use "default" template as default - this works best with eReaders.  Customize page allows change to template used
 * by each user with setting stored in a cookie
 */
$config['cops_template'] = 'default';

/*
 * Number of filter links to show per category in OPDS catalog
 */
$config['cops_opds_filter_limit'] = '8';

$config['cops_html_sort_links'] = ['title', 'author', 'pubdate', 'rating', 'timestamp'];

/*
 * Specify which formats to show download all buttons on pages listing entire series
 */
$config['cops_download_series'] = ['EPUB', 'MOBI'];

/*
 * Specify which formats to show download all buttons on pages listing all books by an author
 */
$config['cops_download_author'] = ['EPUB', 'MOBI'];

/*
 * Choose preferred epub reader when viewing epub files online:
 * 'monocle' (default)
 * 'epubjs'
 */
$config['cops_epub_reader'] = 'epubjs';