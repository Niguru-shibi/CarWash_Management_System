<?php
    // Start the session
    session_start();

    //global variable
$page['page'] = 'Home';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'home_page';

//-- Route to proper controller --//
if (strpos($page['page'], 'admin_') === 0) {
} else {
    if (isset($_GET['function'])) {
        new ActiveHome($page);
    } else {
        new HomeController($page);
    }
}

################################################################################
#------------------------- HomeController (Public) -------------------------#
################################################################################

class HomeController
{
    private $page;
    private $subpage;
    protected $model;

    public function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        if (method_exists($this, $this->subpage)) {
            $this->{$this->subpage}();
        } else {
            echo "404 - Subpage not found.";
        }
    }

    public function home_page()
    {
        include '../views/view_page.php';
    }
}
    

################################################################################
#---------------------------- ActiveHome (Optional) ----------------------------#
################################################################################

class ActiveHome
{
    private $page;
    private $subpage;

    public function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        // Optional: Add action-based POST/GET handling
        // e.g., AJAX handlers or form submissions
    }
}
