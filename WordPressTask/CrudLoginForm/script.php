<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data={
                name=$('#fname').val(),
                uname=$('#uname').val(),
                action=$('#action').val()
            }
        $.ajax({
            url:'userphp.php',
            type:'post',
            data:data,
            success:function(response){
                alert(response);

            }
        })

        })
    }
</script>
