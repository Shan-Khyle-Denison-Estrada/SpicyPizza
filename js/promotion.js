$(document).ready(function(){
    loadPromotionData(); // Load initial data when the page loads
    dataTable = $("#promotion").DataTable({
        dom: 'Brtp',
        responsive: true,
        fixedHeader: true,
        pageLength: 10,
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Excel',
                className: 'border-white',
            },
            {
                extend: 'pdfHtml5',
                text: 'PDF',
                className: 'border-white',
                download: 'open',
            }
        ],
        'columnDefs': [ {
            'targets': [2,3,4,5], /* column index */
            'orderable': false, /* true or false */
        }]
    });
    dataTable.buttons().container().appendTo($('#MyButtons'));

    var table = dataTable;
    var filter = createFilter(table, [1,2,3,4]);

    function createFilter(table, columns) {
        var input = $('input#keyword').on("keyup", function() {
            table.draw();
        });
        
        $.fn.dataTable.ext.search.push(function(
            settings,
            searchData,
            index,
            rowData,
            counter
        ) {
            var val = input.val().toLowerCase();
        
            for (var i = 0, ien = columns.length; i < ien; i++) {
                if (searchData[columns[i]].toLowerCase().indexOf(val) !== -1) {
                return true;
                }
            }
        
            return false;
        });
        
        return input;
    }
    $('.table-responsive select#discount-type').on('change', function(e){
        var discountType = $(this).val();
        dataTable.columns([2]).search(discountType).draw();
    });

    $("#addPromotionButton").click(function(e) {
        e.preventDefault();

        // Collect form data
        var formData = {
            voucherName: $("#voucherName").val(),
            discountType: $("#discountType").val(),
            amount: $("#amount").val(),
            minimumSpend: $("#minimumSpend").val(),
            slots: $("#slots").val(),
            duration: $("#duration").val()
        };
        // Send AJAX request
        $.ajax({
            type: "POST",
            url: "add_promotion_ajax.php", // PHP script to handle the request
            data: formData,
            success: function(response) {
                if (response === "success") {
                    // Close the modal
                    $("#addPromotionModal").modal("hide");
                    // Perform any other actions (e.g., updating the page)
                    loadPromotionData();
                    // for clearing data after save
                    $("#voucherName").val('')
                    $("#discountType").val('')
                    $("#amount").val('')
                    $("#minimumSpend").val('')
                    $("#slots").val('')
                    $("#duration").val('')
                } else {
                    alert("Failed to add voucher.");
                }
            }
        });
    });

    function loadPromotionData() {
        $.ajax({
            type: "GET",
            url: "show_promotion_ajax.php", // Replace with the actual URL of your PHP script
            success: function(data) {
                // Clear the table body
                $("#promotionTableBody").html(data);
            },
            error: function() {
                // Handle AJAX error
                alert("Failed to load promotion data.");
            }
        });
    }
})