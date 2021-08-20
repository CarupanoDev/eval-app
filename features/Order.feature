Feature: Create a new order
    Scenario: Create an order
        Given the request body is:
            """
            {
                "id": "2918dcec-014c-11ec-9a03-0242ac130003",
                "orderDate": "2021-05-06",
                "reference" : "lorem ipsu",
                "code" : "abc12",
                "location": "ipsu lorem",
                "status": "active",
                "company": "test",
                "observations": "issu lorem text"
            }
            """
        When I post to "api/order"
        Then the response code should be 201
