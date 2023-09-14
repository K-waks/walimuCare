from django.db import models


class County(models.Model):
    name = models.CharField(max_length=255)

    def __str__(self):
        return self.name


class SubCounty(models.Model):
    parent_county = models.ForeignKey(
        County, on_delete=models.CASCADE, related_name="sub_counties"
    )
    name = models.CharField(max_length=255)

    def __str__(self):
        return self.name


class Town(models.Model):
    parent_subcounty = models.ForeignKey(
        SubCounty, on_delete=models.CASCADE, related_name="towns"
    )
    name = models.CharField(max_length=255)

    def __str__(self):
        return self.name
