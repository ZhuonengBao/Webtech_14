<div class="ai"><button data-target="faculties/science/ai/year1.php">Artificial Intelligence</button></div>
<div class="computer-science"><button data-target="faculties/science/computer-science/year1.php">Computer Science</button></div>
<div ><button>Econometrics</button></div>
<div ><button>Math</button></div>
<div ><button>Physics</button></div>

<style>
    .faculty button {
        background-color: #E6E6E3;
    }

    .study {
        background-color: #F8F8F8;
    }

    .science button {
        background-color: #ACACAC;
    }
</style>

<script>
    $(document).ready(function () {
    var trigger = $('#study button'),
        container = $('#course');

    trigger.on('click', function () {
        var $this = $(this),
            target = $this.data('target');
      
            container.load(target);
        return false;
        });
    });
</script>
