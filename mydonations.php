<style>
    table,
    th,
    td {
        border: 1px solid black;
        text-align: center
    }

    table {
        width: 100%;
    }
</style>


<body id="body">

    <form action="/action/ajax_post.php" id="nameform" name="nameform" method="get">
        <label>Name : </label>
        <input type='text' id='name' name='name' />

    </form>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script>
    $('#name').keyup(function() {
        // debugger;
        if (this.value.length > 0) {

            var url = $('#nameform').attr('action');

            $.ajax({
                type: "get",
                url: url,
                data: $('#nameform').serialize(),
                success: function(data) {
                    data = JSON.parse(data);

                    if (document.getElementsByTagName('table')[0]) {
                        document.getElementsByTagName('table')[0].remove();
                    }

                    var table = document.createElement('table');
                    var thead = document.createElement('thead');
                    var tr1 = document.createElement('tr');
                    var th1 = document.createElement('th');
                    var th2 = document.createElement('th');
                    var t1 = document.createTextNode('Id');
                    var t2 = document.createTextNode('Name');

                    th1.appendChild(t1);
                    th2.appendChild(t2);
                    tr1.appendChild(th1);
                    tr1.appendChild(th2);
                    thead.appendChild(tr1);
                    table.appendChild(thead);
                    document.getElementById('body').appendChild(table);
                    document.getElementsByTagName('table')[0].className = "table table-striped table-hover";

                    for (let index = 0; index < data.data.length; index++) {

                        var tbody = document.createElement('tbody');
                        var tr2 = document.createElement('tr');
                        var td1 = document.createElement('td');
                        var td2 = document.createElement('td');
                        var id = document.createTextNode(index + 1);
                        var name = document.createTextNode(data.data[index]['name']);

                        td1.appendChild(id);
                        td2.appendChild(name);
                        tr2.appendChild(td1);
                        tr2.appendChild(td2);
                        tbody.appendChild(tr2);
                        table.appendChild(tbody);
                        document.getElementById('body').appendChild(table);
                    }

                }
            });
        }
    });
</script>