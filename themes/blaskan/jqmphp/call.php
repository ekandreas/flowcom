<?php
    /**
     * Example 5 - Adding Listviews
     * @package jqmPhp
     * @filesource
     */

    /**
     * Include the jqmPhp class.
     */
    include 'lib/jqmPhp.php';

    /**
     * Create a new jqmPhp object.
     */
    $j = new jqmPhp();

    /**
     * Config 'html' and 'head' tag.
     */
    $j->head()->title('Call Flowcom!');

    /**
     * Create and config a jqmPage object.
     */
    $p = new jqmPage('callflowcom');
    $p->theme('b')->title('Call Flowcom AB');
    $p->header()->theme('a')->add(new jqmButton('', array(new jqmAttribute('data-iconpos', 'notext')), '', 'a', '/', '', 'home'));
    //Get the Button Added and Set Attributes
    $p->header()->items()->get(1)->attribute('data-iconpos', 'notext')->attribute('rel', 'external');

    /**
     * Create and config a new jqmListview object and add Thumbnails Items.
     */
    $p->addContent('<h3>Phone Book</h3>');
    $list3 = new jqmListview();
    $list3->inset(true);
    $list3->addThumb('Office', '+46(0)8-12451333', '+46(0)8-12451333', 'flowcom_web_150.png');
    $list3->addThumb('Andreas Ek', '+46 (0) 70 - 303 22 03', '+46703032203', 'andreas.png');
    $list3->addThumb('Mattias Johansson', '+46 (0) 76 - 879 09 53', '+46768790953', 'mattias.png');
    $list3->addThumb('Stefan Christoffersson', '+46 (0) 70 - 678 39 07', '+46706783907', 'stefan.png');
    $p->addContent($list3);

    /**
     * Add the page to jqmPhp object.
     */
    $j->addPage($p);

    /**
     * Generate the HTML code.
     */
    echo $j;
?>