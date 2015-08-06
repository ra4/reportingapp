<script>

    $(function() {
        $('#datepickerfrom, #datepickerto').datepicker({
            format: 'yyyy-mm-dd',
            endDate: new Date()
        });
        
        $("#datepickerfrom").on("changeDate", function (e) {
            $('#datepickerto').datepicker('setStartDate', $("#datepickerfrom").val() );
        });

        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
        }).datepicker("setDate", "0");
        
    })

 </script> 