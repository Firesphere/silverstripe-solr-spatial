# Solr search Spatial

Extension for searching with `firesphere/solr-search` adding Spatial searching options.

## Installation

`composer require firesphere/solr-spatial`

## Configuration

Add the spatial extension to data objects you want/need to have Spatially searched:

```yaml
Your\Namespaced\DataObject:
  extensions:
    - Firesphere\SolrSpatial\SpatialDataObjectExtension
```

This will add a Lat and Lon field for latitude and longitude to your DataObject,
as well as a method named `getSpatial()`, which returns the latitude and longitude.

To add the spatial to your Solr core:
```yaml
Firesphere\SolrSearch\Indexes\BaseIndex:
  MySearchCore:
    Classes:
      - Page
    FulltextFields:
      - Spatial
```

If your Spatial is on a relational Object (which is quite common), e.g. a City object, you can add it:

```yaml
Firesphere\SolrSearch\Indexes\BaseIndex:
  MySearchCore:
    Classes:
      - Page
    FulltextFields:
      - City.Spatial
```

Everything else is taken care of. The Spatial/getSpatial field is defined as such, so Solr knows how to search for it.

## Filtering on spatial data

__To be completed__
