"""
URL configuration for walimucare project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.conf import settings
from django.conf.urls.static import static
from django.contrib import admin
from django.urls import path

from home import views

urlpatterns = [
    path("admin/", admin.site.urls),
    path("api/counties/", views.CountyListView.as_view(), name="counties-list"),
    path(
        "api/subcounties/", views.SubCountyListView.as_view(), name="subcounties-list"
    ),
    path("api/towns/", views.TownListView.as_view(), name="towns-list"),
    path("", views.index, name="index"),
    path("about/", views.about, name="about"),
    path("benefits-structure/", views.benefits_structure, name="benefits-structure"),
    path("benefits-structure/inpatient/", views.inpatient, name="inpatient"),
    path("benefits-structure/outpatient/", views.outpatient, name="inpatient"),
    path(
        "benefits-structure/additional-cover/", views.additional_cover, name="inpatient"
    ),
    path("benefits-structure/wellness/", views.wellness, name="inpatient"),
    path("register/", views.register, name="register"),
]

urlpatterns += static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)
