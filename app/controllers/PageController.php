<?php
/**
 * PageController to display pages at user request
 * Benjamin Shanahan
 * Created 20141227
 */

class PageController extends BaseController {

    /* Controller function to display Home page */
	public function showHome()
    {
        $page = 'Home';
        return View::make('pageManager')->with('page',$page);
	}

    /* Controller function to display Catalog page */
    public function showCatalog()
    {
        $page = 'Catalog';
        return View::make('pageManager')->with('page',$page);
    }

    /* Controller function to display About page */
    public function showAbout()
    {
        $page = 'About';
        return View::make('pageManager')->with('page',$page);
    }

}