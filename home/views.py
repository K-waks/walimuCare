from django.shortcuts import render
from rest_framework.generics import ListAPIView

from .models import County, SubCounty, Town
from .serializers import CountySerializer, SubCountySerializer, TownSerializer


class CountyListView(ListAPIView):
    queryset = County.objects.all()
    serializer_class = CountySerializer


class SubCountyListView(ListAPIView):
    serializer_class = SubCountySerializer

    def get_queryset(self):
        county = self.request.query_params.get("parent_county", None)
        if county is not None:
            queryset = SubCounty.objects.filter(parent_county__name=county)
        else:
            queryset = SubCounty.objects.all()
        return queryset


class TownListView(ListAPIView):
    queryset = Town.objects.all()
    serializer_class = TownSerializer

    def get_queryset(self):
        subcounty = self.request.query_params.get("parent_subcounty", None)
        if subcounty is not None:
            queryset = Town.objects.filter(parent_subcounty__name=subcounty)
        else:
            queryset = Town.objects.all()
        return queryset


def index(request):
    return render(request, "home/index.html", {})


def about(request):
    return render(request, "home/about.html", {})


def benefits_structure(request):
    return render(request, "home/benefits-structure.html", {})


def inpatient_benefits(request):
    return render(request, "home/benefits/inpatient.html", {})


def outpatient_benefits(request):
    return render(request, "home/benefits/outpatient.html", {})


def additional_cover(request):
    return render(request, "home/benefits/additional-cover.html", {})


def wellness_education(request):
    return render(request, "home/benefits/wellness.html", {})


def register(request):
    return render(request, "home/register.html", {})
