swagger: "2.0"
info:
  description: ""
  version: "0.0.1"
  title: "Corona Counter"
basePath: "/api/v1"
tags:
- name: "counter"
  description: "Count people entering and leaving a room"
schemes:
- "https"
paths:
  /counter/{counterId}/value:
    get:
      tags:
      - "counter"
      summary: "Get counter value"
      description: "Returns the value for the counter identified by counterId"
      produces:
      - "application/json"
      parameters:
      - name: "counterId"
        in: "path"
        description: "ID of counter"
        required: true
        type: "integer"
        format: "int64"
      responses:
        "200":
          description: "successful operation"
          schema:
            $ref: "#/definitions/Value"
        "400":
          description: "Invalid ID supplied"
        "404":
          description: "Counter not found"
  /counter/{counterId}/value/increment:
    post:
      tags:
      - "counter"
      summary: "Increment counter value by 1"
      description: ""
      produces:
      - "application/json"
      parameters:
      - name: "counterId"
        in: "path"
        description: "ID of counter"
        required: true
        type: "integer"
        format: "int64"
      responses:
        "200":
          description: "successful operation"
          schema:
            $ref: "#/definitions/Value"
        "400":
          description: "Invalid ID supplied"
        "404":
          description: "Counter not found"
  /counter/{counterId}/value/decrement:
    post:
      tags:
      - "counter"
      summary: "Decrement counter value by 1"
      description: ""
      produces:
      - "application/json"
      parameters:
      - name: "counterId"
        in: "path"
        description: "ID of counter"
        required: true
        type: "integer"
        format: "int64"
      responses:
        "200":
          description: "successful operation"
          schema:
            $ref: "#/definitions/Value"
        "400":
          description: "Invalid ID supplied"
        "404":
          description: "Counter not found"
definitions:
  Value:
    type: "object"
    required:
    - "value"
    properties:
      value:
        type: "integer"
        format: "int64"
        example: 123