'use strict';

/* Controllers */

var communityFund = angular.module('csc309Project', []);

communityFund.controller('CommunityController', function($scope) {
  $scope.posts = [
    {'postTitle': 'About Project A', 'author': 'studentA', 'date': '2015-2-26', 'reply': '100', 'finalComments': "studentB","text": "This is the text content"},
    {'postTitle': 'About Project B', 'author': 'studentA', 'date': '2015-2-26', 'reply': '100', 'finalComments': "studentB"},
    {'postTitle': 'About Project C', 'author': 'studentA', 'date': '2015-2-26', 'reply': '100', 'finalComments': "studentB"},
    {'postTitle': 'About Project D', 'author': 'studentA', 'date': '2015-2-26', 'reply': '100', 'finalComments': "studentB"},
    {'postTitle': 'About Project E', 'author': 'studentA', 'date': '2015-2-26', 'reply': '100', 'finalComments': "studentB"},
  ];
});


communityFund.controller('ProjectController', function($scope) {
  $scope.projects = [
    {'name': 'ProjectA', 'description': "this is the description for ProjectA", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectB', 'description': "this is the description for ProjectB", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectC', 'description': "this is the description for ProjectC", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectD', 'description': "this is the description for ProjectD", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectE', 'description': "this is the description for ProjectE", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectF', 'description': "this is the description for ProjectF", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectG', 'description': "this is the description for ProjectG", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectH', 'description': "this is the description for ProjectH", 'imageUrl': "picture/thumbnail.jpg"},
    {'name': 'ProjectI', 'description': "this is the description for ProjectI", 'imageUrl': "picture/thumbnail.jpg"},
  ];
});
