<select id="perPageGet" onchange="return perPageGet()">
    <option value="5">5</option>
    <option selected value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
</select>

<script>
    perPageGet = () => {
        $(document).ready(function() {
            const value = $('#perPageGet').val()
            $('#table').load(`/agama/getData/${value}/0`)
            $('#page').load(`/agama/pageGetData/${value}`)
        })
    }
</script>