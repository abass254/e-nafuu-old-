$(document).ready(function () {
    var dataListView = $(".data-list-view").DataTable({
        responsive: false,
        columnDefs: [
            {
                orderable: true,
                targets: 0,
                checkboxes: { selectRow: false }
            }
        ],
        dom:
            '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
            sLengthMenu: "_MENU_",
            sSearch: ""
        },
        aLengthMenu: [[10, 15, 20, 100], [10, 15, 20, 100]],
        select: {
            style: "multi"
        },
        order: [[1, "asc"]],
        bInfo: false,
        pageLength: 10,
        buttons: [
            {
                text: "<i class='feather icon-plus'></i> Add Banner",
                action: function () {

                    $(this).removeClass("btn-secondary");
                    $("#banner-id").val("");
                    $("#banner-title").val("");
                    $("#banner-description").val("");
                    $("#banner-conditions").val("");
                    $("#banner-status").val("");
                    $("#banner-status").attr('disabled', false);

                    $(".add-new-data").addClass("show");
                    $(".overlay-bg").addClass("show");
                    $("#donor-idnt").val(0);


                },
                className: "btn-outline-primary boxed-shadow add_banner_btn",
                id: "kkk"

            }
        ],
        initComplete: function (settings, json) {
            $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    });

    dataListView.on('draw.dt', function () {
        setTimeout(function () {
            if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
            }
        }, 50);
    });

    // To append actions dropdown before add new button
    var actionDropdown = $(".actions-dropodown")
    actionDropdown.insertBefore($(".top .actions .dt-buttons"))


    // Scrollbar
    if ($(".data-items").length > 0) {
        new PerfectScrollbar(".data-items", { wheelPropagation: false })
    }

    // Close sidebar
    $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function () {
        $(".add-new-data").removeClass("show")
        $(".overlay-bg").removeClass("show")
        $("#data-name, #data-price").val("")
        $("#data-category, #data-status").prop("selectedIndex", 0)
    })

    // On Edit
    //   $('.action-edit').on("click",function(e){
    //     e.stopPropagation();

    //     var idnt = jq(this).data('idnt');
    //     var uuid = jq(this).data('uuid');

    //     $("#donor-idnt").val(idnt);
    //     $("#donor-name,#donor-initial,#donor-address,#donor-icon,#donor-notes").val("");

    //     jq.ajax({
    //       dataType: "json",
    //       url: '/Projects/GetDonor',
    //       data: {
    //           "uuid": uuid
    //       },
    //       success: function(result) {
    //         $("#donor-idnt").val(result.id);
    //         $("#donor-name").val(result.name);
    //         $("#donor-initial").val(result.initials);
    //         $("#donor-address").val(result.address);
    //         $("#donor-icon").val(result.icon);
    //         $("#donor-notes").val(result.notes);

    //         $(".add-new-data").addClass("show");
    //         $(".overlay-bg").addClass("show");
    //       },
    //       error: function(xhr, ajaxOptions, thrownError) {
    //           console.log(xhr.status);
    //           console.log(thrownError);
    //       },
    //       complete: function() {
    //           //nothing todo
    //       }
    //     });
    //   });

    $('input[name=status]').change(function () {
        var mode = $(this).prop('checked');
        var id = $(this).val();
        var token = $('#token').val();

        $.ajax({
            url: "/admin/updateStatus",
            type: "POST",
            data: {
                _token: token,
                mode: mode,
                id: id,
            },
            success: function (response) {
                toastr.success('Success!', response.msg);
            }

        });
    });

    $('.btn-save-banner').click(function () {
        if ($('#banner-title').val().trim().length == 0) {
            toastr.warning('Error!', 'Title is missing');
            event.preventDefault();
            return;
        }

        var id = $("#banner-id").val();
        alert(id);
        event.preventDefault();

        var title = $('#banner-title').val();
        var token = $('#token').val();
        var status = $('#banner-status').val();
        var description = $('#banner-desrciption').val();
        var conditions = $('#banner-conditions').val();
        var photo = $('#thumbnail').val();
        var id =

            $.ajax({
                url: "/admin/banners/store",
                type: "POST",
                data: {
                    _token: token,
                    title: title,
                    status: status,
                    description: description,
                    conditions: conditions,
                    photo: photo,
                },
                success: function (result) {
                    toastr.success('Success', result.message);
                    window.location.href = "/admin/banners";
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                },
                complete: function () {
                    $.unblockUI();
                },
            });
    });
});

function updateUser(banner) {

    console.log(banner)

    $("#banner-id").val(banner.id);
    $("#banner-title").val(banner.title);
    $("#banner-description").val(banner.description);
    $("#banner-conditions").val(banner.condition);
    $("#banner-status").val(banner.status);
    $('#thumbnail').val(banner.photo);
    $("#banner-status").attr('disabled', true);


    $(".add-new-data").addClass("show");
    $(".overlay-bg").addClass("show");
    $("#donor-idnt").val(0);





}
function SaveDonor() {

    var title = $('#banner-title').val();
    var status = $('#banner-status').val();
    var description = $('#banner-desrciption').val();
    var conditions = $('#banner-conditions').val();
    var photo = $('#thumbnail').val();

    $.ajax({
        url: "/admin/banners/store",
        type: "POST",
        data: {
            title: title,
            status: status,
            description: description,
            conditions: conditions,
            photo: photo,
        },
        success: function (result) {
            toastr.success('Success', result.message);
            window.location.href = "/admin/banners";
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        },
        complete: function () {
            $.unblockUI();
        },
    })
}
