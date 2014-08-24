from django.db import models

# Create your models here.
Class Person (models.Model) : 
first_name = models.CharField (max_length=50)
last_name = models.CharField (max_length=50, blank=True)
phone = models.CharField (max_length=15, blank=True)
email = models.EmailField (blank=True)
def __unicode__(self) :
return self.first_name + “ “ + selft.last_name
class Book (models.Model) :
name = models.CharField (max_length=) 
borrowed_by = models.ForeignKey (Person, blank=True, null=True)
borrowed_on = models.DateField (blank=True, null=True)
def __unicode__(self) :  
return self.name
