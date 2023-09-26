import json

from django.core.management.base import BaseCommand

from ...models import County, SubCounty, Town


class Command(BaseCommand):
    help = "Load counties, sub-counties, and towns from a JSON file."

    def add_arguments(self, parser):
        parser.add_argument(
            "json_file",
            type=str,
            nargs="?",
            default="counties.json",
            help="Path to the JSON file.",
        )

    def handle(self, *args, **options):
        json_file = options["json_file"]
        with open(json_file) as f:
            data = json.load(f)

        for county_name, sub_counties in data.items():
            county = County.objects.create(name=county_name)
            for sub_county_name, towns in sub_counties.items():
                sub_county = SubCounty.objects.create(
                    parent_county=county, name=sub_county_name
                )
                for town_name in towns:
                    Town.objects.create(parent_subcounty=sub_county, name=town_name)

        self.stdout.write(self.style.SUCCESS("Data loaded successfully."))
