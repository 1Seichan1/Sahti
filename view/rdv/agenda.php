<div id='calendar'></div>

<script>

var rdv = [
	<?php foreach($rdvs as $rdv){ ?>
	{
        id: "<?php echo $rdv['id_rdv']; ?>",
        title: "<?php echo $rdv['patient']; ?> (<?php echo $rdv['specialite']; ?>)",
        start: "<?php echo $rdv['date']; ?>T<?php echo $rdv['time']; ?>"
    },
	<?php } ?>
];

</script>
