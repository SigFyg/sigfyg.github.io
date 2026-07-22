---
layout: page
permalink: /teaching/
title: Teaching
description: Course materials, schedules, and resources for classes taught.
nav: true
nav_order: 4
calendar: true
---

Found {{ site.data.notes | size }} note(s).

<ul>
{% for note in site.data.notes %}
  <li><a href="{{ note.file | relative_url }}" target="_blank">{{ note.title }}</a></li>
{% endfor %}
</ul>
<!-- This page displays a collection of courses with detailed schedules, materials, and resources. You can organize your courses by years, terms, or topics.

{% for group in site.data.notes %}
<h3>{{ group.course }}</h3>
<ul>
  {% for n in group.notes %}
  <li><a href="{{ n.file | relative_url }}">{{ n.title }}</a></li>
  {% endfor %}
</ul>
{% endfor %} -->
