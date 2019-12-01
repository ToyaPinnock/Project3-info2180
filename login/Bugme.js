window.onload = function() {
        httpRequest = new XMLHttpRequest();

        httpRequest.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('content').innerHTML = this.responseText;
            }
        };

        httpRequest.open("GET", "getbug.php?q=*", true);
        httpRequest.send();



        $(document).on('click', '.problemButton', function() {
            butQuery = new XMLHttpRequest();

            butQuery.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('content').innerHTML = this.responseText;
                }
            };

            butQuery.open("GET", "bugDetail.php?id=" + $(this).attr("value"), true);
            butQuery.send();
        });

        $(document).on('click', '#closed', function() {
            butQuery = new XMLHttpRequest();

            butQuery.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('content').innerHTML = this.responseText;
                }
            };

            butQuery.open("GET", "statusChange.php?status=closed&id=" + $(this).attr("value"), true);
            butQuery.send();
        });

        $(document).on('click', '#progress', function() {
            butQuery = new XMLHttpRequest();

            butQuery.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('content').innerHTML = this.responseText;
                }
            };

            butQuery.open("GET", "statusChange.php?status=Open&id=" + $(this).attr("value"), true);
            butQuery.send();
        });
    }
    ///////////////////////////////////////////////////////////////////