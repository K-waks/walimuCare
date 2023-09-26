from django.contrib import admin

from .models import County, SubCounty, Town

admin.site.register(County)
admin.site.register(SubCounty)
admin.site.register(Town)
