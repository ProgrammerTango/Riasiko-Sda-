<script type="text/javascript">
     console.log('javascript');
                  var minAge=18;
                  var midAge=21;
                  
        function _calcAge() {
            var date = new Date(document.getElementById("DOB").value);
            var depedent = new value(document.getElementById("DependantType").value);
            var today = new Date();

            var timeDiff = Math.abs(today.getTime() - date.getTime());
            var age1 = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;
            return age1;
        }
        function _setAge() {

            var age = _calcAge();
            console.log(age);
            if (age > midAge) {
                    document.getElementById('fileToUpload').style.display = "none";
                    document.getElementById('birthNo').style.display = "block";
                    console.log('tesr');
            
                
            } else{

            document.getElementById('fileToUpload').style.display = "block";
            document.getElementById('birthNo').style.display = "none";
            }
        }
 

    </script>











 <script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("DependantType").value === "Son" ,"Daughter") {
        document.getElementById("PoS").disabled='true';
        document.getElementById("birthNo").disabled='true';
        document.getElementById("DCard").disabled='true';
        document.getElementById("IDNO").disabled='true';


    } else {
        document.getElementById("birthNo").disabled='false';
    }
}
</script>