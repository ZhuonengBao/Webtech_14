<script src="js/jquery-3.6.1.min.js"></script>
<div class="middle">
    <div class="search-container">
        <p class="search-text">I want to Review ...</p>

        <div class="search-bar">
            <form action="#">
                <input id="live_search" type="text" name="search">
                <button type="submit" class="w3-xlarge"><i class="fa fa-search"></i></button>
            </form>
            
        </div>
        
    </div>
    

    <div class="browse-container">
        <p class="browse-text">Browse Courses</p>

        <div class="browse-menu">
            <div  id="faculty" class="faculty">
                <div><button href="#">Amsterdam Law School</button></div>
                <div><button href="#">Economics and Business</button></div>
                <div class="social"><button style="padding: 5px 15px;">Faculty of Social and Behavioural Sciences</button></div>
                <div class="dentistry"><button data-target="faculties/dentistry.php">Faculty of Dentistry (ACTA)</button></div>
                <div class="science"><button data-target="faculties/science.php" >Faculty of Science</button></div>
                <div ><button>Faculty of Humanities</button></div>
                <div ><button>Faculty of Medicine</button></div>
            </div>

            <div id="study" class="study">
                <?php include('empty.php'); ?>
            </div>

            <div id="course" class="course">
                <?php include('empty.php'); ?>
            </div>
            
            
            </div>
        </div>
</div>


