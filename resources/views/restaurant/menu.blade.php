<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand mb-0 h1">Restaurant</span>

</nav>
            <div class="row">
                <div class="col-sm-3">
                    <div class="container">
                        <div class="list-group-item list-group-tem-action active">Item</div>

                        <div class="panel-body bg-dark" style="color: white">
                            <form id="frm-project">

                                <div class="form-group">
                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="pos" id="pos" value="Roll" checked>
                                        <label>Roll</label>
                                    </div>
                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="pos" id="pos" value="Bun" checked>
                                        <label>Bun</label>
                                        </div>

<div class="form-check">

    <input class="form-check-input" type="radio" name="pos" id="pos" value="Pasty" checked>
    <label>Pasty</label>
</div>
</div>
</form>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="container">
<div class="list-group-item list-group-tem-action active">Ingradiants</div>
<div class="panel-body bg-dark" style="color: white">
                <form id="frm-project">

                    <div class="form-group">
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="ind" id="ind" value="veg" checked>
                            <label>Veg</label>
                        </div>
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="ind" id="ind" value="fish" checked>
                            <label>Fish</label>
                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="ind" id="ind" value="chicken" checked>
                            <label>Chicken</label>
                        </div>
                    </div>
                </form>
            </div>

            <div>
                <label>Qty</label>
                <input type="number" id="qty" name="qty" placeholder="Qty" class="form-control" required>
            </div>
             </br>

            <div>
                <input type="button" class="btn btn-info" value="ADD">
                <input type="button" class="btn btn-warning" value="Reset" name="reset" id="reset" >

            </div>


             </br>
             <div>
                <label>Total</label>
                <input type="text" style="color: yellow; background: black" id="total" name="total" placeholder="Total" class="form-control" required>
            </div>








        </div>

    </div>

    <div class="col-sm-6">
        <div class="container">
        <div class="list-group-item list-group-tem-action active">AddProducts</div>


        <table id="tbl-item" class="table table-dark table-bordered" cellspacing="0" width="100%" align="center">
        <thead>
            <tr>
                <th>Delete</th>
                <th>Item</th>

                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>



            </tr>
            <tbody>

            </tbody>
        </table>

    </div>
    </div>

</div>
<script type="text/css" src="component/jquery/jquery.js"></script>
<script type="text/css" src="component/jquery/jquery.min.js"></script>


<script type="text/javascript">
var total = 0;
var tot = 0;
    $(document).ready(function() {

        $("input[type='button']").click(function(){
            var radio1 = $("input[name='pos']:checked").val();
            var radio2 = $("input[name='ind']:checked").val();
            var price = null;
            if(radio1 == "Roll")
            {
                if(radio2 == "veg")
                {
                    price = 12;

                }
                else if(radio2 == "fish")
                {
                    price = 15;
                }
                else if(radio2 == "chicken")
                {

                    price = 30;

                }

            }
            else if(radio1 == "Bun")
            {
                if(radio2 == "veg")
                {
                    price = 30;

                }
                else if(radio2 == "fish")
                {

                    price = 35;
                }
                else if(radio2 == "chicken")
                {
                    price = 50;

                }

            }
            var qty = $('#qty').val();
            tot = qty * price;

            var table1 =

             "<tr>" +

                 "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete </td>" +
                 "<td>" + radio1  + " " + radio2 +  "</td>" +
                  "<td>" +  price +  "</td>" +
                  "<td>" +  qty +  "</td>" +
                  "<td>" +  tot +  "</td>" +
             "</tr>" ;
                total += Number(tot);
                $('#total').val(total);
            $("table tbody").append(table1);
        });

    });

    function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
    }
    $('#reset').click(function()

        {
            location.reload();

        }
    );


</script>
</body>


</html>