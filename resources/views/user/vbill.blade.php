@extends('user.uheader')
@section('main-body')
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 5px 35px;
  cursor: pointer;
  font-size: 20px;
}
.btn:hover {
  background-color: RoyalBlue;
}

td{
    padding:9px;
}
</style>


<br><br><br>
<br><br><br>
<div class="container">
        <div class="row-sm-6" style="border: 1px solid black;padding: 50px;" id="tblCustomers">
        <h2 style="color: black; text-align:center;font-family:serif;">Reciept</h2>
            @foreach($result as $value)
            <div class="bill-form">
            <center>
          
     
                <table>
                <tr>
                    <tr>
                    <td> Name: {{$value->name}} </td>
                    </tr>
                    <tr>
                    <td> Turf Name: {{$value->tname}}</td>
                    </tr>
                    <tr>
                    <td> Turf Type: {{$value->ttype}} </td>
                    </tr>
                    <tr>
                    <td> Place: {{$value->place}}</td>
                    </tr>
                    <tr>
                    <td> Date: {{$value->date}}</td>
                    </tr>
                    <tr>
                    <td> Time: {{$value->time}}</td>
                    </tr>
                    <tr>
                    <td> Price: {{$value->price}}</td>
                    </tr>
                    <tr>
                    <td> Status: {{$value->status}}</td>
                    </tr>
                    </tr>
                </table>
                <br><br>
                @endforeach
            </center>
            </div>
        </div>
        <br>
        <input type="button" id="btnExport" value="Download" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("receipt.pdf");
                }
            });
        });
    </script>
        </div>

@endsection