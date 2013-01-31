{
    "types" : {
        "Trip Report" : {
            "caption" : "Trip Report",
            "category" : "Trip Report",
            "attributeMetadata" : {
                "VisitName" : {
                    "type" : "Text",
                    "hidden" : false,
                    "caption" : "Visit Name",
                    "category" : "About",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 25
                                     } ]
                },
                "TestDate" : {
                    "type" : "date",
                    "hidden" : false,
                    "caption" : "Test Date",
                    "category" : "About",
                    "order" : 1,
                    "constraints" : [ {
                        "type" : "required",
                        "required" : true
                        } ]
                },
                "Description" : {
                    "type" : "Text",
                    "hidden" : false,
                    "caption" : "Description",
                    "category" : "About",
                    "order" : 2,
                    "constraints" : [ {
                                     "type" : "readonly",
                                     "readonly" : "no"
                                     }, {
                                     "type" : "maxLength",
                                     "maxLength" : 10
                                     }]
                },
                "Protocol" : {
                    "type" : "Text",
                    "defaultValue" : "...",
                    "hidden" : false,
                    "caption" : "Protocol",
                    "category" : "About",
                    "order" : 3,
                    "constraints" : [ {
                                     "type" : "externalChoice",
                                     "url" : "http://hostname/protocols",
                                     "dataPath" : "@{items}",
                                     "keyPath" : "@{key}",
                                     "valuePath" : "@{value}",
                                     "freeEntry" : true
                                     },
                                     {
                                     "type" : "required",
                                     "required" : "Status == 'Completed'"
                                     }]
                },
				"Status" : {
					"type" : "Text",
					"category" : "About",
					"order" : 3,
					"constraints" : [
							{
								"type" : "maxLength",
								"maxLength" : 20
							},
							{
								"type" : "readonly",
								"readonly" : "no"
							},
							{
								"type" : "required",
								"required" : "no"
							},
							{
								"type" : "choice",
								"options" : [ "Completed",  "In Progress",  "Not Started",  "Rejected", 
								              "Reviewed with Comments",  "Revised",  "Submitted",  "Submitted for Approval"
								              ],
								"freeEntry" : false
							}, {
								"type" : "state",
								"allowedTransitions" : [ {
									"from" : "In Progress",
									"to" : "Completed"
								}, {
									"from" : "In Progress",
									"to" : "Not Started"
								}, {
									"from" : "Completed",
									"to" : "In Progress"
								}, {
									"from" : "Completed",
									"to" : "Submitted"
								}, {
									"from" : "Submitted",
									"to" : "Rejected"
								}, {
									"from" : "Submitted",
									"to" : "Submitted for Approval"
								}, {
									"from" : "Submitted",
									"to" : "Reviewed with Comments"
								}, {
									"from" : "Rejected",
									"to" : "Revised"
								}, {
									"from" : "Revised",
									"to" : "Submitted"
								}, {
									"from" : "Submitted for Approval",
									"to" : "Rejected"
								}, {
									"from" : "Submitted for Approval",
									"to" : "Reviewed with Comments"
								}, {
									"from" : "Reviewed with Comments",
									"to" : "Submitted"
								}, {
									"from" : "Not Started",
									"to" : "In progress"
								} ]
							} ],
					"caption" : "Trip Report Status",
					"hidden" : false
				},
               "Country" : {
                  "type" : "Text",
                  "hidden" : false,
                  "caption" : "Country",
                  "category" : "About",
                  "order" : 5,
                  "constraints" : [ {
                                 "type" : "externalChoice",
                                 "url" : "http://api.geonames.org/countryInfoJSON?formatted=true&username=vicmatskiv",
                                 "dataPath" : "geonames",
                                 "valuePath" : "countryName",
                                  "freeEntry" : true
                                 } ]
                },
                "Comments" : {
                    "type" : "Text",
                    "defaultValue" : "Your comment here",
                    "hidden" : false,
                    "caption" : "Comment",
                    "category" : "About",
                    "order" : 6,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 1024
                                     },  
                                     {
                                     "type" : "required",
                                     "required" : "Status == 'Completed'"
                                     },
                                     {
                                     "type" : "readonly",
                                     "readonly" : "Status == 'Not Started'"
                                     }]
                }
            },
            "namedConstraints" : {
                "DefaultStatusChoice" : {
                    "type" : "keyValueChoice",
                    "options" : [ {
                                 "value" : "Not Started",
                                 "key" : "1"
                                 }, {
                                 "value" : "In Progress",
                                 "key" : "2"
                                 }, {
                                 "value" : "Completed",
                                 "key" : "3"
                                 } ]
                }
            },
            "directSubitems" : [{
                                "type" : "Attendee",
                                "addable" : true
                                }, {
                                "type" : "Checklist Item",
                                "addable" : true
                                }, {
                                "type" : "Section"
                                }, {
                                "type" : "Follow Up Item",
                                "addable" : true
                                } ],
            
            "subitemsCategories":["About", "Attendees", "Sections", "Checklist Items"]
        },
        "Attendee" : {
            "captionAttribute" : "FirstName",
            "category" : "Attendees",
            "order" : 1,
            "itemTemplate" : {},
            "subitemsCategories":["About"],
            "attributeMetadata" : {
                
                "FirstName" : {
                    "type" : "Text",
                    "hidden" : false,
                    "defaultValue" : "First Name",
                    "caption" : "First Name",
                    "category" : "About",
                    "order" : 1
                },
                "LastName" : {
                    "type" : "Text",
                    "hidden" : false,
                    "defaultValue" : "Last Name",
                    "caption" : "Last Name",
                    "category" : "About",
                    "order" : 1
                },
                "ContactId" : {
                    "type" : "Text",
                    "hidden" : true,
                    "category" : "About",
                    "order" : 1
                }
            }
        },
        "Checklist Item" : {
            "captionAttribute" : "Question",
            "itemOverviewAttribute1" : "Status",
            "category" : "Checklist Items",
            "orderAttribute" : "#",
            "subitemsCategories":["About", "Question", "Comments", "Follow Ups"],
            "directSubitems" : [ {
                                "type" : "Follow Up Item"
                                }],
            "attributeMetadata" : {
                "#" : {
                    "type" : "number",
                    "hidden" : false,
                    "caption" : "#",
                    "category" : "About",
                    "order" : 1
                },
                "Question" : {
                    "type" : "longText",
                    "defaultValue" : "answer me!",
                    "hidden" : false,
                    "caption" : "Question",
                    "category" : "Question",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 256
                                     } ]
                },
                "Status" : {
                    "type" : "Text",
                    "hidden" : false,
                    "caption" : "Status",
                    "category" : "About",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "choice",
                                     "options" : ["Not Started", "In Progress", "Completed"] 
                                     }
                                     ]
                },
                "Comment" : {
                    "type" : "longText",
                    "defaultValue" : "Your comment here",
                    "hidden" : false,
                    "caption" : "Comment",
                    "category" : "Comments",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 1024
                                     }, {
                                     "type" : "required",
                                     "required" : "Status == 'Completed'"
                                     }]
                    
                }
            },
            "subitemsMetadata" : null
        },
        "Follow Up Item" : {
            "captionAttribute" : "Subject",
            "category" : "Follow Ups",
            "order" : 1,
            "itemTemplate" : {},
            "subitemsCategories":["About", "Subject", "Comments"],
            "attributeMetadata" : {
                "#" : {
                    "type" : "number",
                    "hidden" : false,
                    "caption" : "#",
                    "category" : "About",
                    "order" : 1
                },
                "Subject" : {
                    "type" : "longText",
                    "defaultValue" : "answer me!",
                    "hidden" : false,
                    "caption" : "Subject",
                    "category" : "Subject",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 256
                                     } ]
                },
                "Status" : {
                    "type" : "Text",
                    "hidden" : false,
                    "caption" : "Status",
                    "defaultValue" : "Not Started",
                    "category" : "About",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "choice",
                                     "options" : ["Not Started", "In Progress", "Completed"] 
                                     }
                                     ]
                },
                "Comment" : {
                    "type" : "longText",
                    "defaultValue" : "Your comment here",
                    "hidden" : false,
                    "caption" : "Comment",
                    "category" : "Comments",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 1024
                                     } ]
                }
            }
        },
        "Section" : {
            "captionAttribute" : "Name",
            "stateAttribute" : "State",
            "category" : "Sections",
            "attributeMetadata" : {
                "Description" : {
                    "type" : "Text",
                    "hidden" : false,
                    "caption" : "Description",
                    "category" : "About",
                    "order" : 1,
                    "constraints" : [ {
                                     "type" : "readonly",
                                     "readonly" : "no"
                                     } ]
                },
                "Comments" : {
                    "type" : "Text",
                    "defaultValue" : "Your comment here",
                    "hidden" : false,
                    "caption" : "Comment",
                    "category" : "About",
                    "order" : 2,
                    "constraints" : [ {
                                     "type" : "maxLength",
                                     "maxLength" : 1024
                                     } ]
                },
                "State" : {
                    "type" : "Text",
                    "hidden" : true,
                    "caption" : "State",
                    "category" : "About",
                    "order" : 3
                }
            },
            "namedConstraints" : {
                "DefaultStatusChoice" : {
                    "type" : "keyValueChoice",
                    "options" : [ {
                                 "value" : "Not Started",
                                 "key" : "1"
                                 }, {
                                 "value" : "In Progress",
                                 "key" : "2"
                                 }, {
                                 "value" : "Completed",
                                 "key" : "3"
                                 } ]
                }
            }
        }

    },
    
    "data" : {
        "id" : "990001",
        "type" : "Trip Report",
        "attributes" : [ {
                        "name" : "VisitName",
                        "value" : "Visit ABC"
                        }, {
                        "name" : "Description",
                        "value" : "Visit to perform activities A, B and C"
                        }, {
    					"name" : "TestDate",
    					"value" : "2011-11-16T15:55:22Z"
    					}, {
                        "name" : "Protocol"
                        }, {
                        "name" : "Status",
                        "value" : "Submitted"
                        },  {
                        "name" : "Country"
                        },{
                        "name" : "Comments",
                        "value" : null
                        } ],
        "items" : [ 
                   {
                   "id" : "2990002",
                   "type" : "Attendee",
                   "attributes" : [{
                                   "name" : "FirstName",
                                   "value" : "Daniel"
                                   }, {
                                   "name" : "LastName",
                                   "value" : "Pietsch"
                                   }, {
                            	   "name" : "ContactId",
                            	   "value" : "contact-id-1"
                                   }
                                  ]
                   },
                   {
                   "id" : "990002",
                   "type" : "Checklist Item",
                   "attributes" : [{
                                   "name" : "#",
                                   "value" : "1"
                                   }, {
                                   "name" : "Question",
                                   "value" : "Perform drug accountability"
                                   }, {
                                   "name" : "Status",
                                   "value" : "Not Started"
                                   }, {
                                   "name" : "Comment",
                                   "value" : "Some other issues found..."
                                   } ]
                   }, {
                   "id" : "990003",
                   "type" : "Checklist Item",
                   "attributes" : [ {
                                   "name" : "#",
                                   "value" : "2"
                                   }, {
                                   "name" : "Question",
                                   "value" : "Check supplies inventory"
                                   }, {
                                   "name" : "Status",
                                   "value" : "Completed"
                                   }, {
                                   "name" : "Comment"
                                   
                                   } ]
                   }, {
                   "id" : "990001001",
                   "type" : "Follow Up Item",
                   "attributes" : [{
                                   "name" : "#",
                                   "value" : "1"
                                   }, {
                                   "name" : "Subject",
                                   "value" : "Review patient 303 records"
                                   }, {
                                   "name" : "Status",
                                   "value" : "Not Started"
                                   }, {
                                   "name" : "Comment",
                                   "value" : "Some other issues found..."
                                   } ]
                   }, {
                   "id" : "990001002",
                   "type" : "Follow Up Item",
                   "attributes" : [ {
                                   "name" : "#",
                                   "value" : "2"
                                   }, {
                                   "name" : "Subject",
                                   "value" : "Verify facility ABC"
                                   }, {
                                   "name" : "Status",
                                   "value" : "Not Started"
                                   }, {
                                   "name" : "Comment"
                                   
                                   } ]
                   }, 
                   
                   
                   {
                   "id" : "990004",
                   "type" : "Section",
                   "attributes" : [{
                                   "name" : "Name",
                                   "value" : "Collect Documents"
                                   },{
                                   "name" : "Description",
                                   "value" : "Collect Documents Section description"
                                   }, {
                                   "name" : "Comments"
                                   }, {
                                   "name" : "State",
                                   "value" : "YES"
                                   }],
                   "items" : [ {
                              "id" : "990005",
                              "type" : "Checklist Item",
                              "attributes" : [ {
                                              "name" : "Question",
                                              "value" : "Collect Investigator CV"
                                              }, {
                                              "name" : "Status",
                                              "value" : null
                                              }, {
                                              "name" : "Comment"
                                              
                                              } ]
                              }, {
                              "id" : "990006",
                              "type" : "Checklist Item",
                              "attributes" : [ {
                                              "name" : "Question",
                                              "value" : "Collect signed contract"
                                              }, {
                                              "name" : "Status",
                                              "value" : null
                                              }, {
                                              "name" : "Comment"
                                              
                                              } ]
                              } ]
                   },
                   {
                   "id" : "1990004",
                   "type" : "Section",
                   "attributes" : [{
                                   "name" : "Name",
                                   "value" : "Conduct site training"
                                   },{
                                   "name" : "Description",
                                   "value" : "Conduct site training Section description"
                                   }, {
                                   "name" : "Comments"
                                   },{
                                   "name" : "State",
                                   "value" : "Required"
                                   } ],
                   "items" : [ {
                              "id" : "1990005",
                              "type" : "Checklist Item",
                              "attributes" : [ {
                                              "name" : "Question",
                                              "value" : "Conduct data entry training"
                                              }, {
                                              "name" : "Status",
                                              "value" : "2"
                                              }, {
                                              "name" : "Comment"
                                              
                                              } ]
                              }, {
                              "id" : "1990006",
                              "type" : "Checklist Item",
                              "attributes" : [ {
                                              "name" : "Question",
                                              "value" : "Conduct AE reporting training"
                                              }, {
                                              "name" : "Status",
                                              "value" : "2"
                                              }, {
                                              "name" : "Comment"
                                              
                                              } ]
                              } ]
                   }
                   ]
    }

}
