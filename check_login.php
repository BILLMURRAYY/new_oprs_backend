
<!-- function select to page options -->

เลือกรายการ
                <select class="select2" style="width: 100%;" onchange="displayForm(this)">
                    <option value="n1">1</option>
                    <option value="n2">2</option>
                    <option value="n3">3</option>
                </select>

                <div id="c99" style="display: none" class="form-group  " data-cid="c99">
                    goodmornig
                    <input type="text">
                </div>

                <div id="c92" style="display: none" class="form-group  " data-cid="c92">
                    hi
                </div>

                <script>
        function displayForm(elem) {
            if (elem.value == "n1") {
                document.getElementById('c99').style.display = "block";
            } else {
                document.getElementById('c99').style.display = "none";
            }
            if (elem.value == "n2") {
                document.getElementById('c92').style.display = "block";
            } else {
                document.getElementById('c92').style.display = "none";
            }
         
        }
        </script>

        <!-- /option -->