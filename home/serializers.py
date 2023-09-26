from rest_framework import serializers

from .models import County, SubCounty, Town


class CountySerializer(serializers.ModelSerializer):
    class Meta:
        model = County
        fields = "__all__"


class SubCountySerializer(serializers.ModelSerializer):
    class Meta:
        model = SubCounty
        fields = "__all__"


class TownSerializer(serializers.ModelSerializer):
    class Meta:
        model = Town
        fields = "__all__"
