from django.db import models

# Create your models here.

class Project(models.Model):
    project_title = models.CharField(max_length=200)
    description = models.TextField()

class Choice(models.Model):
    project = models.ForeignKey(Project)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)