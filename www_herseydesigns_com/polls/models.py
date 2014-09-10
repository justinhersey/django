from django.db import models

# Create your models here.

class Project(models.Model):
    question = models.CharField(max_length=200)
    pub_date = models.DateTimeField('date published')

class Choice(models.Model):
    project = models.ForeignKey(Project)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)