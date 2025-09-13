jQuery(document).ready(function () {
  jQuery(".project_load_more").on("click", function (event) {
    event.preventDefault();

    var page = jQuery(this).attr("data-page");

    postbyurl(
      "hide_me",
      hr.a_url + "?action=project_load_more",
      "page=" + page
    );
  });

  jQuery(document).delegate("#filter_city", "change", function () {
    jQuery("html,body").animate(
      {
        scrollTop: jQuery(".nav_filter").offset().top - 150,
      },
      "slow"
    );
    var id = jQuery(this).val();

    postbyurl("load_qh", hr.a_url + "?action=load_qh", "id=" + id);
  });

  jQuery("#form_reg_user").submit(function () {
    var err = 0;
    postall_or(
      "hide_me",
      hr.a_url + "?action=registry",
      "reg_user_name||reg_user_mail"
    );
  });

  jQuery(document).delegate(".submit_filter", "click", function (e) {
    e.preventDefault();

    jQuery("html,body").animate(
      {
        scrollTop: jQuery(".nav_filter").offset().top - 50,
      },
      "slow"
    );
    var id_parent = jQuery("#filter_city option").filter(":selected").val();
    var id_child = jQuery("#filter_district option").filter(":selected").val();

    console.log(id_parent);
    console.log(id_child);

    jQuery("#load_office").addClass("active");

    postbyurl(
      "load_office",
      hr.a_url + "?action=load_office",
      "id_parent=" + id_parent + "&id_child=" + id_child
    );
  });
});
