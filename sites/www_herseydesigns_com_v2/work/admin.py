from django.contrib import admin

# Register your models here.
from books.models import Book, Person
from Django.contrib import admin
admin.site.register (Book)
admin.site.register (Person)