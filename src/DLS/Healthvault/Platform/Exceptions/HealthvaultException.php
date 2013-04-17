<?php
namespace DLS\Healthvault\Platform\Exceptions;

class HealthvaultException extends \Exception
{

    //Status Codes
    const NO_RESPONSE = 0;
    const FAILED = 1;
    const BAD_HTTP = 2;
    const INVALID_XML = 3;
    const BAD_SIG = 4;
    const BAD_METHOD = 5;
    const INVALID_APP = 6;
    const CREDENTIAL_TOKEN_EXPIRED = 7;
    const INVALID_TOKEN = 8;
    const INVALID_PERSON = 9;
    const INVALID_RECORD = 10;
    const ACCESS_DENIED = 11;
    const NYI = 12;
    const INVALID_THING = 13;
    const CANT_CONVERT_UNITS = 14;
    const INVALID_FILTER = 15;
    const INVALID_FORMAT = 16;
    const MISSING_SHARED_SECRET = 17;
    const INVALID_APPAUTH = 18;
    const INVALID_THING_TYPE = 19;
    const THING_TYPE_IMMUTABLE = 20;
    const THING_TYPE_UNCREATABLE = 21;
    const DUPLICATE_CREDENTIAL_FOUND = 22;
    const INVALID_RECORD_NAME = 23;
    const DRUG_NOT_FOUND = 24;
    const INVALID_PERSON_STATE = 25;
    const INVALID_CODESET = 26;
    const INVALID_VALIDATION_TOKEN = 28;
    const INVALID_CONTACT_EMAIL = 30;
    const INVALID_LOGIN_NAME = 31;
    const INVALID_PASSWORD = 32;
    const INVALID_OPENQUERY = 33;
    const INVALID_TRANSFORM = 34;
    const INVALID_RELATIONSHIP_TYPE = 35;
    const INVALID_CREDENTIAL_TYPE = 36;
    const INVALID_RECORD_STATE = 37;
    const APP_AUTH_NOT_REQUIRED = 38;
    const REQUEST_TOO_LONG = 39;
    const DUPLICATE_AUTHORIZED_RECORD_FOUND = 40;
    const EMAIL_NOT_VALIDATED = 41;
    const MAIL_ADDRESS_MALFORMED = 45;
    const PASSWORD_NOT_STRONG = 46;
    const CANNOT_REMOVE_LAST_CUSTODIAN = 47;
    const INVALID_EMAIL_ADDRESS = 48;
    const REQUEST_TIMED_OUT = 49;
    const INVALID_SPONSOR_EMAIL = 50;
    const INVALID_PROMOTION_TOKEN = 51;
    const INVALID_RECORD_AUTHORIZATION_TOKEN = 52;
    const TOO_MANY_GROUPS_IN_QUERY = 53;
    const GRANT_AUTHZ_EXCEEDS_DEFAULT = 54;
    const INVALID_VOCABULARY = 55;
    const DUPLICATE_APPLICATION_FOUND = 56;
    const RECORD_AUTHORIZATION_TOKEN_EXPIRED = 57;
    const RECORD_AUTHORIZATION_DOES_NOT_EXIST = 58;
    const THING_TYPE_UNDELETABLE = 59;
    const VERSION_STAMP_MISSING = 60;
    const VERSION_STAMP_MISMATCH = 61;
    const EXPIRED_OPENQUERY = 62;
    const INVALID_PUBLIC_KEY = 63;
    const DOMAIN_NAME_NOT_SET = 64;
    const AUTHENTICATED_SESSION_TOKEN_EXPIRED = 65;
    const INVALID_CREDENTIAL_KEY = 66;
    const INVALID_PERSON_ID = 67;
    const RECORD_QUOTA_EXCEEDED = 68;
    const INVALID_DATETIME = 69;
    const BAD_CERT = 70;
    const RESPONSE_TOO_LONG = 71;
    const INVALID_VERIFICATION_QUESTION = 72;
    const INVALID_VERIFICATION_ANSWER = 73;
    const INVALID_IDENTITY_CODE = 74;
    const RETRY_LIMIT_EXCEEDED = 75;
    const CULTURE_NOT_SUPPORTED = 76;
    const INVALID_FILE_EXTENSION = 77;
    const INVALID_VOCABULARY_ITEM = 78;
    const DUPLICATE_CONNECT_REQUEST_FOUND = 79;
    const INVALID_SPECIAL_ACCOUNT_TYPE = 80;
    const DUPLICATE_TYPE_FOUND = 81;
    const CREDENTIAL_NOT_FOUND = 82;
    const CANNOT_REMOVE_LAST_CREDENTIAL = 83;
    const CONNECT_REQUEST_ALREADY_AUTHORIZED = 84;
    const INVALID_THING_TYPE_VERSION = 85;
    const CREDENTIALS_LIMIT_EXCEEDED = 86;
    const INVALID_METHOD = 87;
    const INVALID_BLOB_REF_URL = 88;
    const CANNOT_GET_STREAMED_OTHER_DATA = 89;
    const UPDATE_THING_TYPE_VERSION_NO_DATA_XML = 90;
    const UNSUPPORTED_CONTENT_ENCODING = 91;
    const CONTENT_ENCODING_DATA_MISMATCH = 92;
    const APPLICATION_LIMIT_EXCEEDED = 93;
    const INVALID_BINARY_CONTENT_ID = 94;
    const CONNECT_REQUEST_INCOMPLETE = 95;
    const CONNECT_PACKAGE_EXISTS = 96;
    const INVALID_FILE_NAME = 97;
    const INVALID_SIGNUP_CODE = 98;
    const BLOB_SIZE_TOO_LARGE_FOR_INLINE = 99;
    const DUPLICATE_BLOB = 100;
    const BLOB_TOKEN_COMMITTED = 101;
    const BLOB_TOKEN_NOT_COMPLETED = 102;
    const THING_POTENTIALLY_INCOMPLETE = 104;
    const INVALID_SIGNATURE_ALGORITHM = 105;
    const INVALID_BLOB_HASH_ALGORITHM = 106;
    const UNSUPPORTED_BLOB_HASH_BLOCK_SIZE = 107;
    const BLOB_HASH_ALGORITHM_MISMATCH = 108;
    const BLOB_HASH_BLOCK_SIZE_MISMATCH = 109;
    const UNSUPPORTED_SIGNATURE_METHOD = 110;
    const INVALID_BLOB_HASH = 111;
    const PACKAGE_BLOB_NOT_COMMITTED = 112;
    const APPLICATION_STATE_TRANSITION_NOT_SUPPORTED = 113;
    const INVALID_PACKAGE_CONTENTS = 120;
    const INVALID_CONTENT_TYPE = 121;
    const CONNECT_PACKAGE_VALIDATION_REQUIRED = 122;
    const INVALID_THING_STATE = 123;
    const TOO_MANY_THINGS_SPECIFIED = 124;
    const INVALID_DIRECTORY_ITEM = 126;
    const INVALID_VOCABULARY_AUTHORIZATION = 129;
    const VOCABULARY_ACCESS_DENIED = 130;
    const UNSUPPORTED_PERSONAL_FLAG = 131;
    const SUBSCRIPTION_NOT_FOUND  = 132;
    const SUBSCRIPTION_LIMIT_EXCEEDED  = 133;
    const SUBSCRIPTION_INVALID  = 134;

    //Status Messages

    const NO_RESPONSE_MSG = 'No response from Healthvault.';
    const FAILED_MSG = 'Generic failure due to unknown causes or internal error.';
    const BAD_HTTP_MSG = 'Http protocol problem.';
    const INVALID_XML_MSG = 'Request xml cannot be parsed or nonconformant.';
    const BAD_SIG_MSG = 'Signature validation failed.';
    const BAD_METHOD_MSG = 'No such method.';
    const INVALID_APP_MSG = 'App does not exist app is invalid app is not active or calling IP is invalid.';
    const CREDENTIAL_TOKEN_EXPIRED_MSG = 'Credential token has expired need a new one.';
    const INVALID_TOKEN_MSG = 'Auth token malformed or otherwise busted.';
    const INVALID_PERSON_MSG = 'Person does not exist or is not active.';
    const INVALID_RECORD_MSG = 'Given record id does not exist.';
    const ACCESS_DENIED_MSG = 'Person or app does not have sufficient rights.';
    const NYI_MSG = 'The functionality being accessed is not yet implemented.';
    const INVALID_THING_MSG = 'Invalid thing identifier.';
    const CANT_CONVERT_UNITS_MSG = 'Data table already exists with incompatible units.';
    const INVALID_FILTER_MSG = 'Missing or invalid GetThingsFilter.';
    const INVALID_FORMAT_MSG = 'Missing or invalid GetThings format specifier.';
    const MISSING_SHARED_SECRET_MSG = 'A credential was supplied without a shared secret.';
    const INVALID_APPAUTH_MSG = 'authorized_applications entry missing.';
    const INVALID_THING_TYPE_MSG = 'Thing type doesn\'t exist.';
    const THING_TYPE_IMMUTABLE_MSG = 'Can\'t update things of this type.';
    const THING_TYPE_UNCREATABLE_MSG = 'Can\'t create things of this type.';
    const DUPLICATE_CREDENTIAL_FOUND_MSG = 'Duplicate Credential found.';
    const INVALID_RECORD_NAME_MSG = 'Invalid Record name.';
    const DRUG_NOT_FOUND_MSG = 'Cannot find the drug specified.';
    const INVALID_PERSON_STATE_MSG = 'Invalid person state.';
    const INVALID_CODESET_MSG = 'Requested code set was not found.';
    const INVALID_VALIDATION_TOKEN_MSG = 'Invalid validation token for contact email validation.';
    const INVALID_CONTACT_EMAIL_MSG = 'Invalid contact email.';
    const INVALID_LOGIN_NAME_MSG = 'Invalid login name.';
    const INVALID_PASSWORD_MSG = 'Invalid password.';
    const INVALID_OPENQUERY_MSG = 'Open query id not found.';
    const INVALID_TRANSFORM_MSG = 'Transform cannot be loaded.';
    const INVALID_RELATIONSHIP_TYPE_MSG = 'Invalid relationship type.';
    const INVALID_CREDENTIAL_TYPE_MSG = 'Invalid credential type.';
    const INVALID_RECORD_STATE_MSG = 'Invalid record state.';
    const APP_AUTH_NOT_REQUIRED_MSG = 'Application authorization is not required for this app.';
    const REQUEST_TOO_LONG_MSG = 'The request provided has exceeded maximum allowed request length.';
    const DUPLICATE_AUTHORIZED_RECORD_FOUND_MSG = 'Duplicate authorized record found.';
    const EMAIL_NOT_VALIDATED_MSG = 'Person email must be validated but it\'s not.';
    const MAIL_ADDRESS_MALFORMED_MSG = 'The email address specified to SendInsecureMessage is malformed.';
    const PASSWORD_NOT_STRONG_MSG = 'The password does not meet the complexity requirements.';
    const CANNOT_REMOVE_LAST_CUSTODIAN_MSG = 'The last custodian for a record cannot be removed.';
    const INVALID_EMAIL_ADDRESS_MSG = 'The email address is invalid.';
    const REQUEST_TIMED_OUT_MSG = 'The request sent to HealthVault reached its time to live and is now too old to be processed.';
    const INVALID_SPONSOR_EMAIL_MSG = 'The sponsor email address is invalid.';
    const INVALID_PROMOTION_TOKEN_MSG = 'Promotion token is invalid.';
    const INVALID_RECORD_AUTHORIZATION_TOKEN_MSG = 'Record authorization token is invalid.';
    const TOO_MANY_GROUPS_IN_QUERY_MSG = 'GetThings Query has too many request groups.';
    const GRANT_AUTHZ_EXCEEDS_DEFAULT_MSG = 'The permissions to be granted exceed the default permissions available to be granted. e.g.attempt to grant all access when only read access is available.';
    const INVALID_VOCABULARY_MSG = 'Requested vocabulary was not found.';
    const DUPLICATE_APPLICATION_FOUND_MSG = 'An application with the same ID already exists.';
    const RECORD_AUTHORIZATION_TOKEN_EXPIRED_MSG = 'Record authorization token has expired.';
    const RECORD_AUTHORIZATION_DOES_NOT_EXIST_MSG = 'Record authorization does not exist.';
    const THING_TYPE_UNDELETABLE_MSG = 'Can\'t delete things of this type.';
    const VERSION_STAMP_MISSING_MSG = 'Version stamp is missing.';
    const VERSION_STAMP_MISMATCH_MSG = 'Version stamp mismatch.';
    const EXPIRED_OPENQUERY_MSG = 'Requested open query has expired.';
    const INVALID_PUBLIC_KEY_MSG = 'Public key is invalid.';
    const DOMAIN_NAME_NOT_SET_MSG = 'The application\'s domain name hasn\'t been set.';
    const AUTHENTICATED_SESSION_TOKEN_EXPIRED_MSG = 'Authenticated session token has expired need a new one.';
    const INVALID_CREDENTIAL_KEY_MSG = 'The credential key was not found.';
    const INVALID_PERSON_ID_MSG = 'Pseudo id for person not valid.';
    const RECORD_QUOTA_EXCEEDED_MSG = 'The size occupied by the things in the put things request will cause the record to exceed the size quota alloted to it.';
    const INVALID_DATETIME_MSG = 'The DateTime supplied is invalid (exceeds the bounds for the DateTime).';
    const BAD_CERT_MSG = 'Certificate validation failed.';
    const RESPONSE_TOO_LONG_MSG = 'The response has exceeded maximum allowed size.';
    const INVALID_VERIFICATION_QUESTION_MSG = 'Verification question for connect request invalid.';
    const INVALID_VERIFICATION_ANSWER_MSG = 'The verification answer for the connect request is invalid.';
    const INVALID_IDENTITY_CODE_MSG = 'There is no connect request corresponding to the given code.';
    const RETRY_LIMIT_EXCEEDED_MSG = 'Maximum number of retries has been exceeded.';
    const CULTURE_NOT_SUPPORTED_MSG = 'Request header culture not supported.';
    const INVALID_FILE_EXTENSION_MSG = 'The file extension is not supported.';
    const INVALID_VOCABULARY_ITEM_MSG = 'The vocabulary item does not exist.';
    const DUPLICATE_CONNECT_REQUEST_FOUND_MSG = 'Duplicate connect request found.';
    const INVALID_SPECIAL_ACCOUNT_TYPE_MSG = 'The account type specified is invalid.';
    const DUPLICATE_TYPE_FOUND_MSG = 'A type with the specified identifier already exists.';
    const CREDENTIAL_NOT_FOUND_MSG = 'Credential not found.';
    const CANNOT_REMOVE_LAST_CREDENTIAL_MSG = 'Attempt to delete last credential associated with an account.';
    const CONNECT_REQUEST_ALREADY_AUTHORIZED_MSG = 'The connect request has been previously authorized.';
    const INVALID_THING_TYPE_VERSION_MSG = 'The type specified to update an instance of a thing is an older version of the type than the existing instance.';
    const CREDENTIALS_LIMIT_EXCEEDED_MSG = 'The maximum number of allowed credentials has been exceeded.';
    const INVALID_METHOD_MSG = 'One or more invalid methods were specified in the method mask.';
    const INVALID_BLOB_REF_URL_MSG = 'The blob reference url supplied for the blob streaming API is invalid.';
    const CANNOT_GET_STREAMED_OTHER_DATA_MSG = 'Other data put in to Healthvault via the streaming API cannot be requested as an other data string.';
    const UPDATE_THING_TYPE_VERSION_NO_DATA_XML_MSG = 'The type version of the thing cannot be changed without a data xml supplied for validation.';
    const UNSUPPORTED_CONTENT_ENCODING_MSG = 'The content encoding specified for the blob is not supported.';
    const CONTENT_ENCODING_DATA_MISMATCH_MSG = 'The content encoding specified for the blob does not match the blob data.';
    const APPLICATION_LIMIT_EXCEEDED_MSG = 'The user exceeded the maximum number of applications allowed.';
    const INVALID_BINARY_CONTENT_ID_MSG = 'The specified binary content identifier was not found.';
    const CONNECT_REQUEST_INCOMPLETE_MSG = 'The connect request was found but does not yet have any contents.';
    const CONNECT_PACKAGE_EXISTS_MSG = 'The connect package has already been fully created and populated.';
    const INVALID_FILE_NAME_MSG = 'The file name is not supported.';
    const INVALID_SIGNUP_CODE_MSG = 'The signup code is invalid.';
    const BLOB_SIZE_TOO_LARGE_FOR_INLINE_MSG = 'The blob is too large and cannot be returned inline.';
    const DUPLICATE_BLOB_MSG = 'A blob of this name is already present in the request.';
    const BLOB_TOKEN_COMMITTED_MSG = 'The blob token corresponds to a blob that is already committed.';
    const BLOB_TOKEN_NOT_COMPLETED_MSG = 'The blob token corresponds to a blob that was not marked completed through the streaming interface.';
    const THING_POTENTIALLY_INCOMPLETE_MSG = 'The thing being updated has data items that cannot be seen in this version = \' e.g. signatures with new signature methods or multiple blobs.\'.';
    const INVALID_SIGNATURE_ALGORITHM_MSG = 'The signature algorithm is not valid.';
    const INVALID_BLOB_HASH_ALGORITHM_MSG = 'The blob hash algorithm is invalid or not supported.';
    const UNSUPPORTED_BLOB_HASH_BLOCK_SIZE_MSG = 'The blob hash block size is unsupported.';
    const BLOB_HASH_ALGORITHM_MISMATCH_MSG = 'The specified blob hash algorithm does not match the blob\'s hash algorithm.';
    const BLOB_HASH_BLOCK_SIZE_MISMATCH_MSG = 'The specified blob hash block size does not match the blob\'s hash block size.';
    const UNSUPPORTED_SIGNATURE_METHOD_MSG = 'The signature method is not supported in the context it is being used.';
    const INVALID_BLOB_HASH_MSG = 'The specified blob hash is invalid.';
    const PACKAGE_BLOB_NOT_COMMITTED_MSG = 'The blob is associated with a connect package that is not yet created.';
    const APPLICATION_STATE_TRANSITION_NOT_SUPPORTED_MSG = 'Changing the application state from deleted is not supported.';
    const INVALID_PACKAGE_CONTENTS_MSG = 'The contents of the connect package are not valid xml.';
    const INVALID_CONTENT_TYPE_MSG = 'The content type is not supported.';
    const CONNECT_PACKAGE_VALIDATION_REQUIRED_MSG = 'The contents of the connect package must be validated before they are put into a health record.';
    const INVALID_THING_STATE_MSG = 'Invalid thing state.';
    const TOO_MANY_THINGS_SPECIFIED_MSG = 'The maximum number of things specified has been exceeded.';
    const INVALID_DIRECTORY_ITEM_MSG = 'The directory item passed in is invalid.';
    const INVALID_VOCABULARY_AUTHORIZATION_MSG = 'The vocabulary authorization is invalid.';
    const VOCABULARY_ACCESS_DENIED_MSG = 'Access to the requested vocabulary is denied.';
    const UNSUPPORTED_PERSONAL_FLAG_MSG = 'The personal flag is not supported with this type.';
    const SUBSCRIPTION_NOT_FOUND_MSG = 'The requested subscription was not found.';
    const SUBSCRIPTION_LIMIT_EXCEEDED_MSG = 'The number of subscriptions for the application was exceeded.';
    const SUBSCRIPTION_INVALID_MSG = 'The subscription contains invalid data.';

    //Exception classes
    const NO_RESPONSE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\NoResponseException';
    const FAILED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\FailedException';
    const BAD_HTTP_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BadHttpException';
    const INVALID_XML_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidXmlException';
    const BAD_SIG_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BadSigException';
    const BAD_METHOD_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BadMethodException';
    const INVALID_APP_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidAppException';
    const CREDENTIAL_TOKEN_EXPIRED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CredentialTokenExpiredException';
    const INVALID_TOKEN_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidTokenException';
    const INVALID_PERSON_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPersonException';
    const INVALID_RECORD_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidRecordException';
    const ACCESS_DENIED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\AccessDeniedException';
    const NYI_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\NyiException';
    const INVALID_THING_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidThingException';
    const CANT_CONVERT_UNITS_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CantConvertUnitsException';
    const INVALID_FILTER_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidFilterException';
    const INVALID_FORMAT_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidFormatException';
    const MISSING_SHARED_SECRET_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\MissingSharedSecretException';
    const INVALID_APPAUTH_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidThingException';
    const INVALID_THING_TYPE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidAppauthException';
    const THING_TYPE_IMMUTABLE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ThingTypeImmutableException';
    const THING_TYPE_UNCREATABLE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ThingTypeUncreatableException';
    const DUPLICATE_CREDENTIAL_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DuplicateCredentialFoundException';
    const INVALID_RECORD_NAME_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidRecordNameException';
    const DRUG_NOT_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DrugNotFoundException';
    const INVALID_PERSON_STATE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPersonStateException';
    const INVALID_CODESET_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidCodesetException';
    const INVALID_VALIDATION_TOKEN_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidValidationTokenException';
    const INVALID_CONTACT_EMAIL_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidContactEmailException';
    const INVALID_LOGIN_NAME_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidLoginNameException';
    const INVALID_PASSWORD_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPasswordException';
    const INVALID_OPENQUERY_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidOpenqueryException';
    const INVALID_TRANSFORM_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidTransformException';
    const INVALID_RELATIONSHIP_TYPE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidRelationshipTypeException';
    const INVALID_CREDENTIAL_TYPE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidCredentialTypeException';
    const INVALID_RECORD_STATE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidRecordStateException';
    const APP_AUTH_NOT_REQUIRED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\AppAuthNotRequiredException';
    const REQUEST_TOO_LONG_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\RequestTooLongException';
    const DUPLICATE_AUTHORIZED_RECORD_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DuplicateAuthorizedRecordFoundException';
    const EMAIL_NOT_VALIDATED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\EmailNotValidatedException';
    const MAIL_ADDRESS_MALFORMED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\MailAddressMalformedException';
    const PASSWORD_NOT_STRONG_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\PasswordNotStrongException';
    const CANNOT_REMOVE_LAST_CUSTODIAN_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CannotRemoveLastCustodianException';
    const INVALID_EMAIL_ADDRESS_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalideEmailAddressException';
    const REQUEST_TIMED_OUT_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\RequestTimedOutException';
    const INVALID_SPONSOR_EMAIL_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidSponsorEmailException';
    const INVALID_PROMOTION_TOKEN_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPromotionTokenException';
    const INVALID_RECORD_AUTHORIZATION_TOKEN_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidRecordAuthorizationTokenException';
    const TOO_MANY_GROUPS_IN_QUERY_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\TooManyGroupsInQueryException';
    const GRANT_AUTHZ_EXCEEDS_DEFAULT_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\GrantAuthExceedsDefaultException';
    const INVALID_VOCABULARY_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidVocabularyException';
    const DUPLICATE_APPLICATION_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DuplicateApplicationFoundException';
    const RECORD_AUTHORIZATION_TOKEN_EXPIRED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\RecordAuthorizationTokenExpiredException';
    const RECORD_AUTHORIZATION_DOES_NOT_EXIST_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\RecordAuthorizationDoesNotExistException';
    const THING_TYPE_UNDELETABLE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ThingTypeUndeletableException';
    const VERSION_STAMP_MISSING_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\VersionStampMissingException';
    const VERSION_STAMP_MISMATCH_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\VersionStampMismatchException';
    const EXPIRED_OPENQUERY_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ExpiredOpenqueryException';
    const INVALID_PUBLIC_KEY_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPublicKeyException';
    const DOMAIN_NAME_NOT_SET_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DomainNameNotSetException';
    const AUTHENTICATED_SESSION_TOKEN_EXPIRED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\AuthenticatedSessionTokenExpiredException';
    const INVALID_CREDENTIAL_KEY_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidCredentialsKeyException';
    const INVALID_PERSON_ID_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPersonIdException';
    const RECORD_QUOTA_EXCEEDED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\RecordQuotaExceedException';
    const INVALID_DATETIME_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidDatetimeException';
    const BAD_CERT_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BadCertException';
    const RESPONSE_TOO_LONG_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ResponseTooLongException';
    const INVALID_VERIFICATION_QUESTION_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidVerificationQuestionException';
    const INVALID_VERIFICATION_ANSWER_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidVerificationAnswerException';
    const INVALID_IDENTITY_CODE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidIdentityCodeException';
    const RETRY_LIMIT_EXCEEDED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\RetryLimitExceededException';
    const CULTURE_NOT_SUPPORTED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CultureNotSupportedException';
    const INVALID_FILE_EXTENSION_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidFileExtensionException';
    const INVALID_VOCABULARY_ITEM_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidVocabularyItemException';
    const DUPLICATE_CONNECT_REQUEST_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DuplicateConnectRequestFoundException';
    const INVALID_SPECIAL_ACCOUNT_TYPE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidSpecialAccountTypeException';
    const DUPLICATE_TYPE_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DuplicateTypeFoundException';
    const CREDENTIAL_NOT_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CredentialNotFoundException';
    const CANNOT_REMOVE_LAST_CREDENTIAL_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CannotRemoveLastCredentialException';
    const CONNECT_REQUEST_ALREADY_AUTHORIZED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ConnectRequestAlreadyAuthorizedException';
    const INVALID_THING_TYPE_VERSION_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidThingTypeVersionException';
    const CREDENTIALS_LIMIT_EXCEEDED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CredentialsLimitExceededException';
    const INVALID_METHOD_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidMethodException';
    const INVALID_BLOB_REF_URL_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidBlobRefUrlException';
    const CANNOT_GET_STREAMED_OTHER_DATA_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\CannotGetStreamedOtherDataException';
    const UPDATE_THING_TYPE_VERSION_NO_DATA_XML_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\UpdateThingTypeVersionNoDataXmlException';
    const UNSUPPORTED_CONTENT_ENCODING_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\UnsupportedContentEncodingException';
    const CONTENT_ENCODING_DATA_MISMATCH_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ContentEncodingDataMismatchException';
    const APPLICATION_LIMIT_EXCEEDED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ApplicationLimitExceededException';
    const INVALID_BINARY_CONTENT_ID_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidBinaryContentIdException';
    const CONNECT_REQUEST_INCOMPLETE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ConnectRequestIncompleteException';
    const CONNECT_PACKAGE_EXISTS_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ConnectPackageExistException';
    const INVALID_FILE_NAME_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidFileNameException';
    const INVALID_SIGNUP_CODE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidSignupCodeException';
    const BLOB_SIZE_TOO_LARGE_FOR_INLINE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BlobSizeTooLargeForInlineException';
    const DUPLICATE_BLOB_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\DuplicateBlobException';
    const BLOB_TOKEN_COMMITTED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BlobTokenCommitedException';
    const BLOB_TOKEN_NOT_COMPLETED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BlobTokenNotCompletedException';
    const THING_POTENTIALLY_INCOMPLETE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ThingPotentiallyIncompleteException';
    const INVALID_SIGNATURE_ALGORITHM_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidSignatureAlgorithmException';
    const INVALID_BLOB_HASH_ALGORITHM_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidBlobHashAlgorithmException';
    const UNSUPPORTED_BLOB_HASH_BLOCK_SIZE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\UnsupportedBlobHashBlockSizeException';
    const BLOB_HASH_ALGORITHM_MISMATCH_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BlobHashAlgorithmMismatchException';
    const BLOB_HASH_BLOCK_SIZE_MISMATCH_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\BlobHashBlockSizeMismatchException';
    const UNSUPPORTED_SIGNATURE_METHOD_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\UnsupportedSignatureMethodException';
    const INVALID_BLOB_HASH_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidBlobHashException';
    const PACKAGE_BLOB_NOT_COMMITTED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\PackageBlobNotCommitedException';
    const APPLICATION_STATE_TRANSITION_NOT_SUPPORTED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ApplicationStateTransitionNotSupportedException';
    const INVALID_PACKAGE_CONTENTS_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidPackageContentException';
    const INVALID_CONTENT_TYPE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidContentTypeException';
    const CONNECT_PACKAGE_VALIDATION_REQUIRED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\ConnectPackageValidationRequiredException';
    const INVALID_THING_STATE_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidThingStateException';
    const TOO_MANY_THINGS_SPECIFIED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\TooManyThingsSpecifiedException';
    const INVALID_DIRECTORY_ITEM_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidDirectoryItemException';
    const INVALID_VOCABULARY_AUTHORIZATION_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\InvalidVocabularyAuthorizationException';
    const VOCABULARY_ACCESS_DENIED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\VocabularyAccessDeniedException';
    const UNSUPPORTED_PERSONAL_FLAG_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\UnsupportedPersonalFlagException';
    const SUBSCRIPTION_NOT_FOUND_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\SubscriptionNotFoundException';
    const SUBSCRIPTION_LIMIT_EXCEEDED_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\SubscriptionLimitExceededException';
    const SUBSCRIPTION_INVALID_CLASS = '\\DLS\\Healthvault\Platform\Exceptions\\SubscriptionInvalidClassException';


    public function __construct($message = null, $code = null, $previous = null)
    {
        if( ! is_null($code) ){

            $status = self::findStatus($code);

            $message = self::findMsg($status);

        }

        parent::__construct($message, $code, $previous);
    }

    static function findStatus($error_code){

        $HealthvaultException = new \ReflectionClass ( 'DLS\\Healthvault\\Platform\\Exceptions\\HealthvaultException' );

        $constants = $HealthvaultException->getConstants();

        foreach ( $constants as $name => $value )
        {
            if ( $value == $error_code )
            {
                return $name;
            }
        }

        return 'FAILED';
    }

    static function findMsg($status){

        return constant('self::'.$status.'_MSG');

    }

    static function findClass($status){

        return constant('self::'.$status.'_CLASS');

    }

    public function getErrorName(){

        return static::findStatus($this->code);

    }


}
