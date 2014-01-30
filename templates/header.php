<html>
    <head>
        <title>Frizz Buzz Bazz</title>
        <style type="text/css">
            #min, #max{
                width: 60px;
                margin-right:20px;
            }
            #fbzz-container span{
                margin-right:15px;
            }
        </style>
        <script type="text/javascript">
            
            function verify(){
                oMin = document.getElementById('min');
                oMax = document.getElementById('max');
                if ( oMin.value.match(/[^\d]+/g) || oMax.value.match(/[^\d]+/g) ||
                    (parseInt(oMin.value) < 1) || (parseInt(oMax.value) < 1) ||
                    (parseInt(oMin.value) > parseInt(oMax.value)) )
                {
                    alert("'Minimum/Maximum' value must:\n -Greater than 0\n- In integer type (not contains any thousand or decimal mark)\n\n'Minimum' value must less or equal to 'Maximum' value");
                    return false;
                }
                return true;
            }
            
            function storeCurrent(min, max, ab){
                document.getElementById('min').value = min;
                document.getElementById('max').value = max;
                var c = ((parseInt(ab) == 0) ? false : true);
                document.getElementById('applybazz').setAttribute('checked', (c ? 'checked'  : ''));
                document.getElementById('applybazz').checked=c;
            }
        </script>
    </head>
    
    <body>
    