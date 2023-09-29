from django.urls import path

from . import views

urlpatterns = [
    # apis
    path("api/counties/", views.CountyListView.as_view(), name="counties-list"),
    path(
        "api/subcounties/", views.SubCountyListView.as_view(), name="subcounties-list"
    ),
    path("api/towns/", views.TownListView.as_view(), name="towns-list"),
    # views
    path("", views.index, name="index"),
    path("about/", views.about, name="about"),
    path("benefits-structure/", views.benefits_structure, name="benefits-structure"),
    path(
        "benefits-structure/inpatient/",
        views.inpatient_benefits,
        name="inpatient-benefits",
    ),
    path(
        "benefits-structure/outpatient/",
        views.outpatient_benefits,
        name="outpatient-benefits",
    ),
    path(
        "benefits-structure/additional-cover/",
        views.additional_cover,
        name="additional-cover",
    ),
    path(
        "benefits-structure/wellness/",
        views.wellness,
        name="wellness",
    ),
    path("register/", views.register, name="register"),
]
