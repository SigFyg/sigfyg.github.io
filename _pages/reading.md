---
layout: page
permalink: /reading/
title: Reading
description: lorem ipsum
nav: true
nav_order: 5
calendar: true
---

The following is a sample of readings that have made a mark on my intellectual journey. I hope you find something in this list that resonates.

{% for group in site.data.readings %}
<h3>{{ group.category }}</h3>
<ul>
  {% for e in group.entries %}
  <li style="margin-bottom: 0.5rem;">
    {% if e.type %}
      <a href="{{ e.link }}" target="_blank"><strong>{{ e.title }}</strong></a>
      <em>({{ e.type }})</em> — {{ e.author }}
    {% else %}
      <strong>{{ e.title }}</strong> — {{ e.author }}
    {% endif %}
  </li>
  {% endfor %}
</ul>
{% endfor %}
