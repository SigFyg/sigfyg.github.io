---
layout: page
permalink: /publications/
title: Publications
description: 
nav: true
nav_order: 3
---

<ul>
{% for pub in site.data.publications %}
  <li style="margin-bottom: 1rem;">
    {% if pub.link %}<a href="{{ pub.link }}" target="_blank"><strong>{{ pub.title }}</strong></a>{% else %}<strong>{{ pub.title }}</strong>{% endif %}<br>
    {{ pub.authors }}
    {% if pub.venue or pub.status %}<br>
      {% if pub.venue %}<em>{{ pub.venue }}</em>{% if pub.year %}, {{ pub.year }}{% endif %}{% endif %}
      {% if pub.status %}<em>({{ pub.status }})</em>{% endif %}
    {% endif %}
  </li>
{% endfor %}
</ul>

<!-- {% include bib_search.liquid %}
<div class="publications">
{% bibliography %}
</div> -->


